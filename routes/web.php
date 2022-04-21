<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('index');

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('teams', [HomeController::class, 'teams'])->name('teams');
    Route::get('withdraw', [HomeController::class, 'withdraw'])->name('withdraw');
    Route::get('withdraws', [HomeController::class, 'withdraws'])->name('withdraws');
});

require_once __DIR__ . '/auth.php';
