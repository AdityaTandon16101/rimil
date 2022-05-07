<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [PageController::class, 'index'])->name('index');

Route::group(['middleware' => 'auth'], function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard');
        Route::get('profile', 'profile')->name('profile');
        Route::get('bank-details', 'bankDetails')->name('bank.details');
        Route::get('change-password', 'changePassword')->name('change.password');
        Route::get('teams', 'teams')->name('teams');
        Route::get('deposites', 'deposites')->name('deposites');
        Route::get('withdraw', 'withdraw')->name('withdraw');
        Route::get('withdraws', 'withdraws')->name('withdraws');
    });
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
