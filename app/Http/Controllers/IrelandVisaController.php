<?php

namespace App\Http\Controllers;

use App\Mail\CorrectionMail;
use App\Mail\CorrectionMailIreland;
use Illuminate\Http\Request;
use App\Models\IrelandVisa;
use Illuminate\Support\Facades\Mail;

class IrelandVisaController extends Controller
{
    public function index()
    {
        $applications = IrelandVisa::latest()->get();
        return view('admin.ireland_visa.index', compact('applications'));
    }

    public function show($id)
    {
        $application = IrelandVisa::findOrFail($id);
        return view('admin.ireland_visa.show', compact('application'));
    }
    public function show2($id)
    {
        $application = IrelandVisa::findOrFail($id);
        return view('admin.ireland_visa.show2', compact('application'));
    }

    public function edit($id)
    {
        $application = IrelandVisa::findOrFail($id);

        $fields = $application->correction_fields ?? [];

        return view('frontend.ireland_visa.edit', compact('application', 'fields'));
    }
    public function update(Request $request, $id)
    {
        $application = IrelandVisa::findOrFail($id);

        $fields = $application->correction_fields ?? [];

        $data = [];

        foreach ($fields as $field) {

            if ($request->hasFile($field)) {

                $file = $request->file($field);
                $name = time().'_'.$file->getClientOriginalName();

                $folder = 'uploads/ireland/general';

                if (in_array($field, ['passport_scan','prev_passport_1','prev_passport_2'])) {
                    $folder = 'uploads/ireland/passport';
                } elseif ($field == 'spouse_passport') {
                    $folder = 'uploads/ireland/family';
                } elseif (in_array($field, ['bank_statements','payslips'])) {
                    $folder = 'uploads/ireland/docs';
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
        $application = IrelandVisa::findOrFail($id);

        $fields = $request->fields;
        $messageText = $request->message;

        $application->update([
            'correction_fields' => $fields,
            'correction_message' => $messageText,
        ]);

        Mail::to($application->email)->send(
            new CorrectionMailIreland($application, $fields, $messageText)
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
            $file->move(public_path('uploads/ireland/passport'), $name);
            $data['passport_scan'] = 'uploads/ireland/passport/'.$name;
        }

        /* PREVIOUS PASSPORT 1 */
        if ($request->hasFile('prev_passport_1')) {
            $file = $request->file('prev_passport_1');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/ireland/passport'), $name);
            $data['prev_passport_1'] = 'uploads/ireland/passport/'.$name;
        }

        /* PREVIOUS PASSPORT 2 */
        if ($request->hasFile('prev_passport_2')) {
            $file = $request->file('prev_passport_2');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/ireland/passport'), $name);
            $data['prev_passport_2'] = 'uploads/ireland/passport/'.$name;
        }

        /* SPOUSE PASSPORT */
        if ($request->hasFile('spouse_passport')) {
            $file = $request->file('spouse_passport');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/ireland/family'), $name);
            $data['spouse_passport'] = 'uploads/ireland/family/'.$name;
        }

        /* BANK STATEMENTS */
        if ($request->hasFile('bank_statements')) {
            $file = $request->file('bank_statements');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/ireland/docs'), $name);
            $data['bank_statements'] = 'uploads/ireland/docs/'.$name;
        }

        /* PAYSLIPS */
        if ($request->hasFile('payslips')) {
            $file = $request->file('payslips');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/ireland/docs'), $name);
            $data['payslips'] = 'uploads/ireland/docs/'.$name;
        }

        /* CHILDREN PASSPORTS (MULTIPLE FILES) */
        if ($request->hasFile('children_passports')) {

            $files = [];

            foreach ($request->file('children_passports') as $file) {

                $name = time().'_'.$file->getClientOriginalName();
                $file->move(public_path('uploads/ireland/family'), $name);

                $files[] = 'uploads/ireland/family/'.$name;
            }

            $data['children_passports'] = json_encode($files);
        }

        // IrelandVisa::create($data);

        // return redirect()->route('home')->with('success', 'Application Submitted Successfully');
        $application = IrelandVisa::create($data);

        return redirect()->route('payment.checkout', $application->id);
    }
}