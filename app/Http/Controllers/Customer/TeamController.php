<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teamMembers = User::query()->myTeamMembers()->with('memberDetail')->paginate(20);
        return inertia('Customer/Team/Index', compact('teamMembers'));
    }
}
