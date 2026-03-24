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

class CommonController extends Controller
{
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
}