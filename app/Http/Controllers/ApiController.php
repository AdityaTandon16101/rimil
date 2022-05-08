<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getSponsorName($referralCode)
    {
        $user = User::referralCode($referralCode)->first();

        return response(!$user
            ? ['success' => false]
            : [
                'success' => true,
                'name' => $user->name
            ], 200);
    }
}
