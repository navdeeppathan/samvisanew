<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DubaiVisa;
use Illuminate\Support\Facades\Mail;
use App\Mail\CorrectionMail;
use App\Mail\CorrectionMailDubai;

class DubaiVisaController extends Controller
{

    public function index()
    {
        $applications = DubaiVisa::latest()->get();
        return view('admin.dubai_visa.index', compact('applications'));
    }

    public function show($id)
    {
        $application = DubaiVisa::findOrFail($id);
        return view('admin.dubai_visa.show', compact('application'));
    }

    public function show2($id)
    {
        $application = DubaiVisa::findOrFail($id);
        return view('admin.dubai_visa.show2', compact('application'));
    }

    public function edit($id)
    {
        $application = DubaiVisa::findOrFail($id);

        $fields = $application->correction_fields ?? [];

        return view('frontend.dubai_visa.edit', compact('application', 'fields'));
    }

    public function update(Request $request, $id)
    {
        $application = DubaiVisa::findOrFail($id);

        $fields = $application->correction_fields ?? [];

        $data = [];

        foreach ($fields as $field) {

            if ($request->hasFile($field)) {

                $file = $request->file($field);
                $name = time().'_'.$file->getClientOriginalName();

                $folder = 'uploads/dubai/general';

                if ($field == 'passport_scan') {
                    $folder = 'uploads/dubai/passport';
                } elseif ($field == 'passport_photo') {
                    $folder = 'uploads/dubai/photo';
                } elseif ($field == 'uk_visa_copy') {
                    $folder = 'uploads/dubai/visa';
                } elseif (in_array($field, ['bank_statements','payslips'])) {
                    $folder = 'uploads/dubai/docs';
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
        $application = DubaiVisa::findOrFail($id);

        $fields = $request->fields;
        $messageText = $request->message;

        $application->update([
            'correction_fields' => $fields,
            'correction_message' => $messageText,
        ]);

        Mail::to($application->email)->send(
            new CorrectionMailDubai($application, $fields, $messageText)
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
            $file->move(public_path('uploads/dubai/passport'), $name);
            $data['passport_scan'] = 'uploads/dubai/passport/'.$name;
        }

        /* PASSPORT PHOTO */
        if ($request->hasFile('passport_photo')) {
            $file = $request->file('passport_photo');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/dubai/photo'), $name);
            $data['passport_photo'] = 'uploads/dubai/photo/'.$name;
        }

        /* UK VISA COPY */
        if ($request->hasFile('uk_visa_copy')) {
            $file = $request->file('uk_visa_copy');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/dubai/visa'), $name);
            $data['uk_visa_copy'] = 'uploads/dubai/visa/'.$name;
        }

        /* BANK STATEMENTS */
        if ($request->hasFile('bank_statements')) {
            $file = $request->file('bank_statements');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/dubai/docs'), $name);
            $data['bank_statements'] = 'uploads/dubai/docs/'.$name;
        }

        /* PAYSLIPS */
        if ($request->hasFile('payslips')) {
            $file = $request->file('payslips');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/dubai/docs'), $name);
            $data['payslips'] = 'uploads/dubai/docs/'.$name;
        }

        // DubaiVisa::create($data);

        // return redirect()->route('home')->with('success','Dubai visa application submitted successfully');
        $application = DubaiVisa::create($data);

        // return redirect()->route('payment.checkout', $application->id);
        return redirect()->route('payment.checkout', [
            'id' => $application->id,
            'type' => 'dubai',
        ]);
    }
}