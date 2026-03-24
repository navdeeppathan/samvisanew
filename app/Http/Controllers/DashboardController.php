<?php

namespace App\Http\Controllers;

use App\Models\ChinaVisaApplication;
use App\Models\DubaiVisa;
use App\Models\EuropeVisaApplication;
use App\Models\IrelandVisa;
use App\Models\MoroccoVisa;
use App\Models\TurkeyVisa;

class DashboardController extends Controller
{
    public function index()
    {
        // Stats
        $china = ChinaVisaApplication::count();
        $dubai = DubaiVisa::count();
        $europe = EuropeVisaApplication::count();
        $ireland = IrelandVisa::count();
        $morocco = MoroccoVisa::count();
        $turkey = TurkeyVisa::count();

        $totalApplications = $china + $dubai + $europe + $ireland + $morocco + $turkey;

        // Months labels
        $months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];

        // Get month-wise data WITH keys
        $chinaRaw = ChinaVisaApplication::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->groupBy('month')
            ->pluck('total', 'month');

        $dubaiRaw = DubaiVisa::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->groupBy('month')
            ->pluck('total', 'month');

        $europeRaw = EuropeVisaApplication::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->groupBy('month')
            ->pluck('total', 'month');

        $irelandRaw = IrelandVisa::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->groupBy('month')
            ->pluck('total', 'month');
            
        $moroccoRaw = MoroccoVisa::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->groupBy('month')
            ->pluck('total', 'month');
            
        $turkeyRaw = TurkeyVisa::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->groupBy('month')
            ->pluck('total', 'month');

        // Fill missing months
        $chinaData = [];
        $dubaiData = [];
        $europeData = [];
        $irelandData = [];
        $moroccoData = [];
        $turkeyData = [];

        for ($i = 1; $i <= 12; $i++) {
            $chinaData[] = $chinaRaw[$i] ?? 0;
            $dubaiData[] = $dubaiRaw[$i] ?? 0;
            $europeData[] = $europeRaw[$i] ?? 0;
            $irelandData[] = $irelandRaw[$i] ?? 0;
            $moroccoData[] = $moroccoRaw[$i] ?? 0;
            $turkeyData[] = $turkeyRaw[$i] ?? 0;
        }

        return view('admin.dashboard', compact(
            'totalApplications',
            'china',
            'dubai',
            'europe',
            'ireland',
            'morocco',
            'turkey',
            'months',
            'chinaData',
            'dubaiData',
            'europeData',
            'irelandData',
            'moroccoData',
            'turkeyData'
        ));
    }
}