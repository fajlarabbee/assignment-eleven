<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $currency = '$';
        $salesToday = DB::table('sales')
            ->whereDate('created_at', Carbon::today())
            ->sum('subtotal');
        $salesYesterday = DB::table('sales')
            ->whereDate('created_at', Carbon::yesterday())
            ->sum('subtotal');

        $salesCurrentMonth = DB::table('sales')
            ->whereMonth('created_at', Carbon::now()->month)
            ->sum('subtotal');

        $salesLastMonth = DB::table('sales')
            ->whereMonth('created_at', Carbon::now()->subMonth()->month)
            ->sum('subtotal');


        return view('backend.dashboard', compact('currency', 'salesToday', 'salesYesterday', 'salesCurrentMonth', 'salesLastMonth'));


    }
}
