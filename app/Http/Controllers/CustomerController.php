<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function editProfile(User $user, Request $request)
    {
        dump($user);
        dd($request->toArray());
    }

    public function editBankDetails(User $user, Request $request)
    {
        dump($user);
        dd($request->toArray());
    }

    public function changePassword(User $user, Request $request)
    {
        dump($user);
        dd($request->toArray());
    }
}
