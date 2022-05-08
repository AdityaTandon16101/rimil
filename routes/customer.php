<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Support\Facades\Route;

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::prefix('profile', function () {
    Route::get('/', [CustomerController::class, 'profile'])->name('profile');
});

Route::resource('teams', TeamController::class)->only(['index']);
Route::resource('deposites', TeamController::class)->only(['index']);
Route::resource('withdraws', TeamController::class)->only(['index']);
