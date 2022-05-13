<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return auth()->user()->role_id == Role::ADMIN
            ? inertia('Admin/Dashboard', [
                'users' => User::query()->customer()->with('memberDetail')->paginate(20)
            ])
            : inertia('Customer/Dashboard', [
                'memberDetail' => auth()->user()->memberDetail,
                'counters' => [
                    'team' => Team::query()->myTeam()->count(),
                    'winners' => User::query()->winners()->count(),
                    'phase_one' => User::query()->phase01()->count(),
                    'phase_two' => User::query()->phase02()->count(),
                    'phase_three' => User::query()->phase03()->count(),
                    'phase_four' => User::query()->phase04()->count(),
                    'phase_five' => User::query()->phase05()->count(),
                ],
            ]);
    }
}
