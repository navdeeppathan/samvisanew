<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TurkeyVisa;
use Illuminate\Support\Facades\Mail;
use App\Mail\CorrectionMail;
use App\Mail\CorrectionMailTurkey;

class TurkeyVisaController extends Controller
{
    public function index()
    {
        $applications = TurkeyVisa::latest()->get();
        return view('admin.turkey_visa.index', compact('applications'));
    }

    public function show($id)
    {
        $application = TurkeyVisa::findOrFail($id);
        return view('admin.turkey_visa.show', compact('application'));
    }
    public function show2($id)
    {
        $application = TurkeyVisa::findOrFail($id);
        return view('admin.turkey_visa.show2', compact('application'));
    }

    public function edit($id)
    {
        $application = TurkeyVisa::findOrFail($id);

        $fields = $application->correction_fields ?? [];

        return view('frontend.turkey_visa.edit', compact('application', 'fields'));
    }

    public function update(Request $request, $id)
    {
        $application = TurkeyVisa::findOrFail($id);

        $fields = $application->correction_fields ?? [];

        $data = [];

        foreach ($fields as $field) {

            if ($request->hasFile($field)) {

                $file = $request->file($field);
                $name = time().'_'.$file->getClientOriginalName();

                $folder = 'uploads/turkey/general';

                if ($field == 'passport_scan') {
                    $folder = 'uploads/turkey/passport';
                } elseif ($field == 'passport_photo') {
                    $folder = 'uploads/turkey/photo';
                } elseif ($field == 'uk_visa_copy') {
                    $folder = 'uploads/turkey/visa';
                } elseif (in_array($field, ['bank_statements','payslips'])) {
                    $folder = 'uploads/turkey/docs';
                }

                $file->move(public_path($folder), $name);

                $data[$field] = $folder.'/'.$name;

            } else {
                $data[$field] = $request->$field;
            }
        }

        $application->update($data);

        // clear correction
        $application->update([
            'correction_fields' => null,
            'correction_message' => null,
        ]);

        return redirect()->route('application.thankyou');
    }

    

    public function sendCorrection(Request $request, $id)
    {
        $application = TurkeyVisa::findOrFail($id);

        $fields = $request->fields;
        $messageText = $request->message;

        $application->update([
            'correction_fields' => $fields,
            'correction_message' => $messageText,
        ]);

        Mail::to($application->email)->send(
            new CorrectionMailTurkey($application, $fields, $messageText)
        );

        return back()->with('success', 'Correction email sent!');
    }
    public function submit(Request $request)
    {
        $data = $request->all();

        /* PASSPORT SCAN */
        if ($request->hasFile('passport_scan')) {
            $file = $request->file('passport_scan');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/turkey/passport'), $name);
            $data['passport_scan'] = 'uploads/turkey/passport/'.$name;
        }

        /* PASSPORT PHOTO */
        if ($request->hasFile('passport_photo')) {
            $file = $request->file('passport_photo');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/turkey/photo'), $name);
            $data['passport_photo'] = 'uploads/turkey/photo/'.$name;
        }

        /* UK VISA COPY */
        if ($request->hasFile('uk_visa_copy')) {
            $file = $request->file('uk_visa_copy');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/turkey/visa'), $name);
            $data['uk_visa_copy'] = 'uploads/turkey/visa/'.$name;
        }

        /* BANK STATEMENTS */
        if ($request->hasFile('bank_statements')) {
            $file = $request->file('bank_statements');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/turkey/docs'), $name);
            $data['bank_statements'] = 'uploads/turkey/docs/'.$name;
        }

        /* PAYSLIPS */
        if ($request->hasFile('payslips')) {
            $file = $request->file('payslips');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/turkey/docs'), $name);
            $data['payslips'] = 'uploads/turkey/docs/'.$name;
        }

        // TurkeyVisa::create($data);

        // return redirect()->route('home')->with('success','Turkey visa application submitted successfully');
        $application = TurkeyVisa::create($data);

        return redirect()->route('payment.checkout', $application->id);
    }
}
