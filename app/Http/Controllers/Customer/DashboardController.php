<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return inertia('Customer/Dashboard', [
            'memberDetail' => auth()->user()->memberDetail,
            'teamMembersCount' => Team::query()->myTeam()->count()
        ]);
    }
}
