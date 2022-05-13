<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PermanentMemberController extends Controller
{
    public function index()
    {
        $members = User::query()->winners()->with('memberDetail')->paginate(20);
        return inertia('Customer/PermanentMembers', compact('members'));
    }
}
