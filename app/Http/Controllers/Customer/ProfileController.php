<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBankRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

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

    public function showBankDetails()
    {
        return inertia('Customer/Profile/BankDetails', [
            'user' => auth()->user(),
            'bankDetails' => auth()->user()->bankDetails
        ]);
    }

    public function storeBankDetails(StoreBankRequest $request)
    {
        $user = User::find(auth()->id());

        $request->isPasswordCorrect($user);
        $request->storeBankDetails($user);
        return back();
    }

    public function updateBankDetails(User $user, Request $request)
    {
        // dd($request->toArray());
    }

    public function showChangepasswordPage()
    {
        return inertia('Customer/Profile/ChangePassword', [
            'user' => auth()->user()
        ]);
    }

    public function changePassword(User $user, Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'string', 'min:8'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if (!Hash::check($request->current_password, $user->password)) {
            throw ValidationException::withMessages([
                'current_password' => 'Incorrect Current Password',
            ]);
        }
        $user->password = Hash::make($request->password);
        $user->save();
        return back()->with('success', 'Password Changed successfully.');
    }
}
