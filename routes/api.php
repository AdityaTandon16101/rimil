<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('sponsor-name/{referralCode}', [ApiController::class, 'getSponsorName']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
