<?php

namespace App\Http\Controllers;

use App\Mail\CorrectionMail;
use Illuminate\Http\Request;
use App\Models\ChinaVisaApplication;
use Illuminate\Support\Facades\Mail;

class ChinaVisaController extends Controller
{
    

    public function edit($id)
    {
        $application = ChinaVisaApplication::findOrFail($id);

        $fields = json_decode($application->correction_fields, true) ?? [];


        return view('frontend.china_visa.edit', compact('application', 'fields'));
    }

    public function update(Request $request, $id)
    {
        $application = ChinaVisaApplication::findOrFail($id);

        $fields = json_decode($application->correction_fields, true) ?? [];

        $data = [];

        foreach ($fields as $field) {

            // Handle file uploads
            if ($request->hasFile($field)) {

                $file = $request->file($field);
                $name = time().'_'.$file->getClientOriginalName();

                $folder = 'uploads/general';

                if (in_array($field, ['passport_scan', 'empty_pages'])) {
                    $folder = 'uploads/passports';
                } elseif ($field == 'selfie_photo') {
                    $folder = 'uploads/selfie';
                } elseif ($field == 'bank_statements') {
                    $folder = 'uploads/bank';
                } elseif ($field == 'payslips') {
                    $folder = 'uploads/payslips';
                } elseif ($field == 'dbs_check') {
                    $folder = 'uploads/dbs';
                } elseif ($field == 'prev_visa') {
                    $folder = 'uploads/oldvisa';
                }

                $file->move(public_path($folder), $name);

                $data[$field] = $folder.'/'.$name;

            } else {
                // Normal fields
                $data[$field] = $request->$field;
            }
        }

        $application->update($data);

        // OPTIONAL: clear correction after update
        $application->update([
            'correction_fields' => null,
            'correction_message' => null,
        ]);

        // return redirect()->back()->with('success', 'Application updated successfully!');
        return redirect()->route('application.thankyou');
    }

    public function sendCorrection(Request $request, $id)
    {
        $application = ChinaVisaApplication::findOrFail($id);

        $fields = $request->fields; // selected fields
        $messageText = $request->message;

        

        // Save correction request (optional but recommended)
        $application->update([
            'correction_fields' => json_encode($fields),
            'correction_message' => $messageText,
        ]);

        // dd($application->correction_fields);

        // Send email
        Mail::to($application->email)->send(
            new CorrectionMail($application, $fields, $messageText)
        );

        return back()->with('success', 'Correction email sent!');
    }
    public function index()
    {
        $applications = ChinaVisaApplication::latest()->get();
        return view('admin.china_visa.index', compact('applications'));
    }


    public function show($id)
    {
        $application = ChinaVisaApplication::findOrFail($id);
        return view('admin.china_visa.show', compact('application'));
    }

    public function show2($id)
    {
        $application = ChinaVisaApplication::findOrFail($id);
        return view('admin.china_visa.show2', compact('application'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        /* PASSPORT SCAN */
        if ($request->hasFile('passport_scan')) {
            $file = $request->file('passport_scan');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/passports'), $name);
            $data['passport_scan'] = 'uploads/passports/'.$name;
        }

        /* EMPTY PASSPORT PAGES */
        if ($request->hasFile('empty_pages')) {
            $file = $request->file('empty_pages');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/passports'), $name);
            $data['empty_pages'] = 'uploads/passports/'.$name;
        }

        /* SELFIE */
        if ($request->hasFile('selfie_photo')) {
            $file = $request->file('selfie_photo');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/selfie'), $name);
            $data['selfie_photo'] = 'uploads/selfie/'.$name;
        }


        if($request->hasFile('oldVisaCopy')){
            $file = $request->file('oldVisaCopy');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/oldvisa'), $name);
            $data['prev_visa'] = 'uploads/oldvisa/'.$name;
        }

        /* BANK STATEMENTS */
        if ($request->hasFile('bank_statements')) {
            $file = $request->file('bank_statements');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/bank'), $name);
            $data['bank_statements'] = 'uploads/bank/'.$name;
        }

        /* PAYSLIPS */
        if ($request->hasFile('payslips')) {
            $file = $request->file('payslips');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/payslips'), $name);
            $data['payslips'] = 'uploads/payslips/'.$name;
        }

        /* DBS CHECK */
        if ($request->hasFile('dbs_check')) {
            $file = $request->file('dbs_check');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/dbs'), $name);
            $data['dbs_check'] = 'uploads/dbs/'.$name;
        }

        /* PREVIOUS VISA */
        if ($request->hasFile('prev_visa')) {
            $file = $request->file('prev_visa');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/oldvisa'), $name);
            $data['prev_visa'] = 'uploads/oldvisa/'.$name;
        }

        // ChinaVisaApplication::create($data);

        // return redirect()->route('home')->with('success','Application submitted');
        $application = ChinaVisaApplication::create($data);

        // return redirect()->route('payment.checkout', $application->id);
        return redirect()->route('payment.checkout', [
            'id' => $application->id,
            'type' => 'china'
        ]);
    }
}
