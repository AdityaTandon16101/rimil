<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return inertia('Customer/Profile/Index', [
            'user' => auth()->user()
        ]);
    }

    public function updateProfile(User $user, Request $request)
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
