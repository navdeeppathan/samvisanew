<?php

namespace App\Http\Controllers;

use App\Mail\CorrectionMail;
use App\Mail\CorrectionMailEurope;
use Illuminate\Http\Request;
use App\Models\EuropeVisaApplication;
use Illuminate\Support\Facades\Mail;

class EuropeVisaController extends Controller
{
    public function index()
    {
        $applications = EuropeVisaApplication::latest()->get();
        return view('admin.europe_visa.index', compact('applications'));
    }

    public function show($id)
    {
        $application = EuropeVisaApplication::findOrFail($id);
        return view('admin.europe_visa.show', compact('application'));
    }

    public function sendCorrection(Request $request, $id)
    {
        $application = EuropeVisaApplication::findOrFail($id);

        $fields = $request->fields;
        $messageText = $request->message;

        $application->update([
            'correction_fields' => $fields,
            'correction_message' => $messageText,
        ]);

        Mail::to($application->email)->send(
            new CorrectionMailEurope($application, $fields, $messageText)
        );

        return back()->with('success', 'Correction email sent!');
    }


    public function edit($id)
    {
        $application = EuropeVisaApplication::findOrFail($id);

        $fields = $application->correction_fields ?? [];

        
        return view('frontend.europe_visa.edit', compact('application', 'fields'));
    }


    public function update(Request $request, $id)
    {
        $application = EuropeVisaApplication::findOrFail($id);

        $fields = $application->correction_fields ?? [];

        $data = [];

        foreach ($fields as $field) {

            if ($request->hasFile($field)) {

                $file = $request->file($field);
                $name = time().'_'.$file->getClientOriginalName();

                $folder = 'uploads/visa/europe/general';

                if ($field == 'passport_scan') {
                    $folder = 'uploads/visa/europe/passport';
                } elseif ($field == 'bank_statements') {
                    $folder = 'uploads/visa/europe/bank';
                } elseif ($field == 'payslips') {
                    $folder = 'uploads/visa/europe/payslips';
                } elseif ($field == 'prev_eu_visa') {
                    $folder = 'uploads/visa/europe/previous';
                } elseif ($field == 'eu_relation_passport') {
                    $folder = 'uploads/visa/europe/eu_relation';
                }

                $file->move(public_path($folder), $name);

                $data[$field] = $folder.'/'.$name;

            } else {
                $data[$field] = $request->$field;
            }
        }

        $application->update($data);

        // clear corrections
        $application->update([
            'correction_fields' => null,
            'correction_message' => null,
        ]);

        return redirect()->route('application.thankyou');
    }
    public function store(Request $request)
    {
        $data = $request->all();

        /* PASSPORT SCAN */
        if ($request->hasFile('passport_scan')) {
            $file = $request->file('passport_scan');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/visa/europe/passport'), $name);
            $data['passport_scan'] = 'uploads/visa/europe/passport/'.$name;
        }

        /* BANK STATEMENTS */
        if ($request->hasFile('bank_statements')) {
            $file = $request->file('bank_statements');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/visa/europe/bank'), $name);
            $data['bank_statements'] = 'uploads/visa/europe/bank/'.$name;
        }

        /* PAYSLIPS */
        if ($request->hasFile('payslips')) {
            $file = $request->file('payslips');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/visa/europe/payslips'), $name);
            $data['payslips'] = 'uploads/visa/europe/payslips/'.$name;
        }

        /* PREVIOUS EU VISA */
        if ($request->hasFile('prev_eu_visa')) {
            $file = $request->file('prev_eu_visa');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/visa/europe/previous'), $name);
            $data['prev_eu_visa'] = 'uploads/visa/europe/previous/'.$name;
        }

        /* EU RELATION PASSPORT */
        if ($request->hasFile('eu_relation_passport')) {
            $file = $request->file('eu_relation_passport');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/visa/europe/eu_relation'), $name);
            $data['eu_relation_passport'] = 'uploads/visa/europe/eu_relation/'.$name;
        }

        EuropeVisaApplication::create($data);

        return redirect()->route('home')->with('success','Application submitted successfully.');
    }
}
