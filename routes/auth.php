<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('register', [RegisterController::class, 'create'])->name('register');
Auth::routes([
    'register' => false
]);
