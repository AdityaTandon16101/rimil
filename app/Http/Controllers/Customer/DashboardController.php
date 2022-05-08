<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return inertia('Customer/Dashboard', [
            'isDepositedUpto500' => auth()->user()->memberDetail->total_deposites >= 500
        ]);
    }
}
