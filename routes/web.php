<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('index');


Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    require_once __DIR__ . '/customer.php';

    Route::prefix('admin')->group(fn () => require_once __DIR__ . '/admin.php');
});

require __DIR__ . '/auth.php';
