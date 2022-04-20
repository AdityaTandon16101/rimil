<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('index');

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
});

require_once __DIR__ . '/auth.php';
