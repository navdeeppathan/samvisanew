<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VisaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VisaRequestController extends Controller
{

    // list requests
    public function index()
    {
        $requests = VisaRequest::latest()->paginate(20);

        return view('admin.visarequests.index',compact('requests'));
    }

    public function index()
    {
        $applications = collect();

        // China
        $china = ChinaVisaApplication::latest()->get()->map(function ($item) {
            $item->country = 'china';
            return $item;
        });

        // Dubai
        $dubai = DubaiVisa::latest()->get()->map(function ($item) {
            $item->country = 'dubai';
            return $item;
        });

        // Europe
        $europe = EuropeVisaApplication::latest()->get()->map(function ($item) {
            $item->country = 'europe';
            return $item;
        });

        // Ireland
        $ireland = IrelandVisa::latest()->get()->map(function ($item) {
            $item->country = 'ireland';
            return $item;
        });

        // Morocco
        $morocco = MoroccoVisa::latest()->get()->map(function ($item) {
            $item->country = 'morocco';
            return $item;
        });

        // Turkey
        $turkey = TurkeyVisa::latest()->get()->map(function ($item) {
            $item->country = 'turkey';
            return $item;
        });

        // Merge all
        $applications = $applications
            ->merge($china)
            ->merge($dubai)
            ->merge($europe)
            ->merge($ireland)
            ->merge($morocco)
            ->merge($turkey)
            ->sortByDesc('created_at');

        return view('admin.common.index', compact('applications'));
    }


    // delete request
    public function destroy($id)
    {
        VisaRequest::findOrFail($id)->delete();

        return back()->with('success','Request deleted');
    }


    // send reply email
    public function sendReply(Request $request,$id)
    {
        $request->validate([
            'message' => 'required'
        ]);

        $visa = VisaRequest::findOrFail($id);

        $url = route('visa.edit',$visa->edit_token);

        Mail::send('emails.visa_reply',[
            'messageBody'=>$request->message,
            'editUrl'=>$url
        ],function($mail) use ($visa){

            $mail->to($visa->email)
                ->subject('Visa Request Update');

        });

        return back()->with('success','Reply sent successfully');
    }

   public function bulkMail(Request $request)
    {
        $ids = explode(',', $request->users);

        $users = VisaRequest::whereIn('id',$ids)->get();

        foreach($users as $user){

            Mail::send('emails.visa-template', [
                'messageText' => $request->message
            ], function ($mail) use ($user) {

                $mail->to($user->email)
                    ->subject('Visa Assistance');

            });

        }

        return back()->with('success','Bulk mail sent successfully');
    }

}