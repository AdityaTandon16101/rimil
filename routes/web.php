<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('index');

Route::group(['middleware' => 'auth'], function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard');
        Route::get('profile', 'profile')->name('profile');
        Route::get('teams', 'teams')->name('teams');
        Route::get('deposites', 'deposites')->name('deposites');
        Route::get('withdraw', 'withdraw')->name('withdraw');
        Route::get('withdraws', 'withdraws')->name('withdraws');
    });
});

require_once __DIR__ . '/auth.php';
