<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('index');

Route::group([
    'middleware' => ['auth', 'customer']
], fn () => require_once __DIR__ . '/customer.php');

require __DIR__ . '/auth.php';
