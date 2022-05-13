<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegistrationRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return Inertia::render('Auth/Register', [
            'referralCode' => request()->has('referral') ? request('referral') : ''
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegistrationRequest $request)
    {
        DB::transaction(function () use ($request) {
            $user = $request->storeUser();
            $request->storeMemberDetails($user);
            $request->makePermanentMemberIf500th($user);
            if (!is_null($request->referral_code)) {
                $referredUser = $request->attachToMyTeam($user);
                $request->giveReferralReward($referredUser, 50);
            }
            Auth::login($user);
        });

        return redirect(RouteServiceProvider::DASHBOARD);
    }
}
