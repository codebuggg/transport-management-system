<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sales;
use App\Driver;

class DashboardController extends Controller
{
    public function __invoke() 
    {
        return view('logistics.dashboard', [
            'sales' => Sales::limit(5)->get(),
            'drivers' => Driver::get()->count(),
            'sales_sum' => Sales::sum('amount'),
            'sales_count' => Sales::get()->count()
        ]);
    }
}
