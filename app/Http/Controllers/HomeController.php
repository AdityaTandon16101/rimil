<?php

namespace App\Http\Controllers;

use App\Models\Withdraw;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function profile()
    {
        return view('pages.app.profile');
    }

    public function bankDetails()
    {
        return view('pages.app.bankDetails');
    }

    public function changePassword()
    {
        return view('pages.app.changePassword');
    }

    public function teams()
    {
        return view('pages.app.team');
    }

    public function deposites()
    {
        return view('pages.app.deposite');
    }

    public function withdraw()
    {
        return view('pages.app.withdraw');
    }

    public function withdraws()
    {
        $withdraws = Withdraw::query()->my()->paginate();
        return view('pages.app.withdraws', compact('withdraws'));
    }
}
