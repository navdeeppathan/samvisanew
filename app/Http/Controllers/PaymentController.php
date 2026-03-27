<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\Payment;
use App\Models\ChinaVisaApplication;


use Stripe\Webhook;


class PaymentController extends Controller
{


    public function checkout($id)
    {
        $application = ChinaVisaApplication::findOrFail($id);

        Stripe::setApiKey(config('services.stripe.secret'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'mode' => 'payment',
            'customer_email' => $application->email,

            'line_items' => [[
                'price_data' => [
                    'currency' => 'gbp',
                    'product_data' => [
                        'name' => 'China Visa Application Fee',
                    ],
                    'unit_amount' => 5000, // £50 (in pence)
                ],
                'quantity' => 1,
            ]],

            'success_url' => route('payment.success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('payment.cancel'),

            'metadata' => [
                'application_id' => $application->id
            ]
        ]);

        // Save payment record
        Payment::create([
            'application_id' => $application->id,
            'stripe_session_id' => $session->id,
            'amount' => 85,
            'currency' => 'gbp',
            'status' => 'pending',
            'customer_email' => $application->email
        ]);

        return redirect($session->url);
    }

   

    public function success(Request $request)
    {
        $session_id = $request->get('session_id');

        if (!$session_id) {
            return "Invalid payment session.";
        }

        Stripe::setApiKey(config('services.stripe.secret'));

        try {
            // Get session from Stripe
            $session = Session::retrieve($session_id);

            if ($session->payment_status !== 'paid') {
                return "Payment not completed.";
            }

            // Find payment
            $payment = Payment::where('stripe_session_id', $session_id)->first();

            if (!$payment) {
                return "Payment record not found.";
            }

            // Update payment
            $payment->update([
                'status' => 'paid',
                'stripe_payment_intent_id' => $session->payment_intent,
                'payment_method' => 'card'
            ]);

            // Update application
            $application = ChinaVisaApplication::find($payment->application_id);

            if ($application) {
                $application->update([
                    'payment_status' => 'paid'
                ]);
            }

            return view('payment.success'); // create blade if needed

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function cancel()
    {
        return "Payment cancelled.";
    }


    

    // public function webhook(Request $request)
    // {
    //     $payload = $request->getContent();
    //     $sig_header = $request->server('HTTP_STRIPE_SIGNATURE');

    //     try {
    //         $event = Webhook::constructEvent(
    //             $payload,
    //             $sig_header,
    //             config('services.stripe.webhook_secret')
    //         );
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => 'Invalid'], 400);
    //     }

    //     if ($event->type === 'checkout.session.completed') {

    //         $session = $event->data->object;

    //         $payment = Payment::where('stripe_session_id', $session->id)->first();

    //         if ($payment) {
    //             $payment->update([
    //                 'status' => 'paid',
    //                 'stripe_payment_intent_id' => $session->payment_intent,
    //                 'payment_method' => 'card'
    //             ]);
    //         }
    //         $payment->application->update([
    //             'payment_status' => 'paid'
    //         ]);
    //     }

    //     return response()->json(['status' => 'success']);
    // }
}
