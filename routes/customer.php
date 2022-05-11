<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Support\Facades\Route;

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('teams', TeamController::class)->only(['index']);
Route::resource('deposits', DepositController::class)->only(['index', 'create', 'store']);
Route::resource('withdraws', WithdrawController::class)->only(['index']);
Route::resource('permanent-members', PermanentMemberController::class)->only(['index']);

Route::prefix('profile')->group(function () {
    Route::get('/', [ProfileController::class, 'profile'])->name('profile');
});

Route::put('profile/{user}', [ProfileController::class, 'updateProfile'])->name('profile.update');
