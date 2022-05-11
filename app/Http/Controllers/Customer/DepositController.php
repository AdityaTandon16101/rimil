<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepositStoreRequest;
use App\Models\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function store(DepositStoreRequest $request)
    {
        DB::transaction(function () use ($request) {
            $request->storeDeposit();
            $request->addToMyMemberDeposits();
        });
        return back();

        // TODO deposite into Company's Bank
    }
}
