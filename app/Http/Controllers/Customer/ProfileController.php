<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function editProfile(User $user, Request $request)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        return back()->with('success', 'Profile Updated...');
    }

    public function storeBankDetails(Request $request)
    {
        dd($request->toArray());
    }

    public function changePassword(User $user, Request $request)
    {
        dump($user);
        dd($request->toArray());
    }
}
