<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register');
Auth::routes([
    'register' => false
]);
