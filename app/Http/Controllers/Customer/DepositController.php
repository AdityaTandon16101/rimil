<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function index()
    {
        $deposits = Deposit::query()->my()->paginate(20);
        return inertia('Customer/Deposit/Index', compact('deposits'));
    }

    public function create()
    {
        return inertia('Customer/Deposit/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => ['required', 'numeric']
        ]);

        // TODO deposite into Company's Bank
        $deposit = new Deposit();
        $deposit->user_id = auth()->id();
        $deposit->date = date('Y-m-d');
        $deposit->amount = $request->amount;
        $deposit->save();
        return back();
    }
}
