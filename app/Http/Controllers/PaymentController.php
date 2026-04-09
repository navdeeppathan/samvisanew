<?php

namespace App\Http\Controllers;

use App\Mail\AdminNewApplicationMail;
use App\Mail\ApplicationSuccessMail;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\Payment;
use App\Models\ChinaVisaApplication;
use App\Models\DubaiVisa;
use Illuminate\Support\Facades\Mail;
use Stripe\Webhook;


class PaymentController extends Controller
{


    public function checkout($id,$type)
    {
        // if($type == 'china') {
        //     $application = ChinaVisaApplication::findOrFail($id);
        // }

        $model = $this->getApplicationModel($type);

        if (!$model) {
            return "Invalid application type";
        }

        // ✅ All fees config here
        $fees = [
            'china' => [
                'amount' => 85,
                'currency' => 'gbp',
            ],
            'dubai' => [
                'amount' => 160,
                'currency' => 'gbp',
            ],
            'europe' => [
                'amount' => 133,
                'currency' => 'gbp',
            ],
            'ireland' => [
                'amount' => 85,
                'currency' => 'gbp',
            ],
            'morocco' => [
                'amount' => 181,
                'currency' => 'gbp',
            ],
            'turkey' => [
                'amount' => 85,
                'currency' => 'gbp',
            ],
        ];

        $fee = $fees[$type];

        $application = $model::findOrFail($id);

        Stripe::setApiKey(config('services.stripe.secret'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'mode' => 'payment',
            'customer_email' => $application->email,

            'line_items' => [[
                'price_data' => [
                    'currency' => $fee['currency'],
                    'product_data' => [
                        'name' => ucfirst($type) . ' Visa Application Fee Visa grant, refusal, or delay in processing your application is all Embassy decisions.All fees paid are non-refundable.',
                    ],
                    'unit_amount' => $fee['amount'] * 100, // convert to smallest unit
                ],
                'quantity' => 1,
            ]],


            'success_url' => route('payment.success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('payment.cancel'),

            'metadata' => [
                'application_id' => $application->id,
                'type' => $type,
            ]
        ]);

        // Save payment record
        Payment::create([
            'application_id' => $application->id,
            'stripe_session_id' => $session->id,
            'amount' => $fee['amount'],
            'currency' => $fee['currency'],
            'status' => 'pending',
            'customer_email' => $application->email,
            'type' => $type
        ]);

        return redirect($session->url);
    }

    private function getApplicationModel($type)
    {
        $map = [
            'china' => \App\Models\ChinaVisaApplication::class,
            'dubai' => \App\Models\DubaiVisa::class,
            'europe' => \App\Models\EuropeVisaApplication::class,
            'ireland' => \App\Models\IrelandVisa::class,
            'morocco' => \App\Models\MoroccoVisa::class,
            'turkey' => \App\Models\TurkeyVisa::class,
        ];

        return $map[$type] ?? null;
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
            // $application = ChinaVisaApplication::find($payment->application_id);
            // 👇 GET TYPE
            $type = $session->metadata->type;

            $model = $this->getApplicationModel($type);

            if (!$model) {
                return "Invalid application type";
            }

            $application = $model::find($payment->application_id);

            if ($application) {
                $application->update([
                    'payment_status' => 'paid'
                ]);

                // ✅ Send email to user
                Mail::to($application->email)
                    ->send(new ApplicationSuccessMail($application,$type));

                // ✅ Send email to admin
                Mail::to(env('ADMIN_EMAIL')) // set in .env
                    ->send(new AdminNewApplicationMail($application,$type));
            }

            return view('payment.success'); // create blade if needed

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function cancel()
    {
        return view('payment.cancel');
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
