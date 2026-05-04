<?php

namespace App\Http\Controllers;

use App\Mail\CorrectionMail;
use Illuminate\Http\Request;
use App\Models\ChinaVisaApplication;
use App\Models\DubaiVisa;
use App\Models\EuropeVisaApplication;
use App\Models\IrelandVisa;
use App\Models\MoroccoVisa;
use App\Models\TurkeyVisa;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class CommonController extends Controller
{
//    public function index()
//     {
//         $applications = collect();

//         // China
//         $china = ChinaVisaApplication::latest()->get()->map(function ($item) {
//             $item->country = 'china';
//             return $item;
//         });

//         // Dubai
//         $dubai = DubaiVisa::latest()->get()->map(function ($item) {
//             $item->country = 'dubai';
//             return $item;
//         });

//         // Europe
//         $europe = EuropeVisaApplication::latest()->get()->map(function ($item) {
//             $item->country = 'europe';
//             return $item;
//         });

//         // Ireland
//         $ireland = IrelandVisa::latest()->get()->map(function ($item) {
//             $item->country = 'ireland';
//             return $item;
//         });

//         // Morocco
//         $morocco = MoroccoVisa::latest()->get()->map(function ($item) {
//             $item->country = 'morocco';
//             return $item;
//         });

//         // Turkey
//         $turkey = TurkeyVisa::latest()->get()->map(function ($item) {
//             $item->country = 'turkey';
//             return $item;
//         });

//         // Merge all
//         $applications = $applications
//             ->merge($china)
//             ->merge($dubai)
//             ->merge($europe)
//             ->merge($ireland)
//             ->merge($morocco)
//             ->merge($turkey)
//             ->sortByDesc('created_at');

//         return view('admin.common.index', compact('applications'));
//     }



    public function index()
    {
        $china = ChinaVisaApplication::select(
            'id',
            'surname',
            'first_name',
            'middle_name',
            'email',
            'mobile_phone',
            'payment_status',
            DB::raw("'china' as country"),
            'created_at'
        );

        $dubai = DubaiVisa::select(
            'id',
            'surname',
            'first_name',
            'middle_name',
            'email',
            'mobile_phone',
            'payment_status',
            DB::raw("'dubai' as country"),
            'created_at'
        );

        $europe = EuropeVisaApplication::select(
            'id',
            'surname',
            'first_name',
            'middle_name',
            'email',
            'mobile_phone',
            'payment_status',
            DB::raw("'europe' as country"),
            'created_at'
        );

        $ireland = IrelandVisa::select(
            'id',
            'surname',
            'first_name',
            'middle_name',
            'email',
            'mobile_phone',
            'payment_status',
            DB::raw("'ireland' as country"),
            'created_at'
        );

        $morocco = MoroccoVisa::select(
            'id',
            'surname',
            'first_name',
            'middle_name',
            'email',
            'mobile_phone',
            'payment_status',
            DB::raw("'morocco' as country"),
            'created_at'
        );

        $turkey = TurkeyVisa::select(
            'id',
            'surname',
            'first_name',
            'middle_name',
            'email',
            'mobile_phone',
            'payment_status',
            DB::raw("'turkey' as country"),
            'created_at'
        );

        // Merge using UNION
        $applications = $china
            ->unionAll($dubai)
            ->unionAll($europe)
            ->unionAll($ireland)
            ->unionAll($morocco)
            ->unionAll($turkey);

        // Wrap for ordering + pagination
        $applications = DB::query()
            ->fromSub($applications, 'visa_apps')
            ->orderByDesc('created_at') // latest on top
            ->paginate(10);

        return view('admin.common.index', compact('applications'));
    }
}