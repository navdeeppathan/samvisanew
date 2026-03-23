<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MoroccoVisa;
use Illuminate\Support\Facades\Mail;
use App\Mail\CorrectionMail;
use App\Mail\CorrectionMailMorocco;

class MoroccoVisaController extends Controller
{
    public function index()
    {
        $applications = MoroccoVisa::latest()->get();
        return view('admin.morocco_visa.index', compact('applications'));
    }

    public function show($id)
    {
        $application = MoroccoVisa::findOrFail($id);
        return view('admin.morocco_visa.show', compact('application'));
    }

    public function edit($id)
    {
        $application = MoroccoVisa::findOrFail($id);

        $fields = $application->correction_fields ?? [];

        return view('frontend.morocco_visa.edit', compact('application', 'fields'));
    }

    public function update(Request $request, $id)
    {
        $application = MoroccoVisa::findOrFail($id);

        $fields = $application->correction_fields ?? [];

        $data = [];

        foreach ($fields as $field) {

            if ($request->hasFile($field)) {

                $file = $request->file($field);
                $name = time().'_'.$file->getClientOriginalName();

                $folder = 'uploads/morocco/general';

                if ($field == 'passport_scan') {
                    $folder = 'uploads/morocco/passport';
                } elseif ($field == 'passport_photo') {
                    $folder = 'uploads/morocco/photo';
                } elseif ($field == 'uk_visa_copy') {
                    $folder = 'uploads/morocco/visa';
                } elseif (in_array($field, ['bank_statements','payslips'])) {
                    $folder = 'uploads/morocco/docs';
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
        $application = MoroccoVisa::findOrFail($id);

        $fields = $request->fields;
        $messageText = $request->message;

        $application->update([
            'correction_fields' => $fields,
            'correction_message' => $messageText,
        ]);

        Mail::to($application->email)->send(
            new CorrectionMailMorocco($application, $fields, $messageText)
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
            $file->move(public_path('uploads/morocco/passport'), $name);
            $data['passport_scan'] = 'uploads/morocco/passport/'.$name;
        }

        /* PASSPORT PHOTO */
        if ($request->hasFile('passport_photo')) {
            $file = $request->file('passport_photo');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/morocco/photo'), $name);
            $data['passport_photo'] = 'uploads/morocco/photo/'.$name;
        }

        /* UK VISA COPY */
        if ($request->hasFile('uk_visa_copy')) {
            $file = $request->file('uk_visa_copy');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/morocco/visa'), $name);
            $data['uk_visa_copy'] = 'uploads/morocco/visa/'.$name;
        }

        /* BANK STATEMENTS */
        if ($request->hasFile('bank_statements')) {
            $file = $request->file('bank_statements');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/morocco/docs'), $name);
            $data['bank_statements'] = 'uploads/morocco/docs/'.$name;
        }

        /* PAYSLIPS */
        if ($request->hasFile('payslips')) {
            $file = $request->file('payslips');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/morocco/docs'), $name);
            $data['payslips'] = 'uploads/morocco/docs/'.$name;
        }

        MoroccoVisa::create($data);

        return redirect()->route('home')->with('success','Application submitted successfully');
    }
}