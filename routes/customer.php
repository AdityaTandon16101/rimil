<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Support\Facades\Route;

Route::resource('teams', TeamController::class)->only(['index']);
Route::resource('deposits', DepositController::class)->only(['index', 'create', 'store']);
Route::resource('withdraws', WithdrawController::class)->only(['index', 'create', 'store']);
Route::resource('permanent-members', PermanentMemberController::class)->only(['index']);

Route::prefix('profile')->controller(ProfileController::class)->group(function () {
    Route::get('/', 'profile')->name('profile');
    Route::get('/bank-details', 'showBankDetails')->name('profile.showbankdetails');
    Route::get('change-password', 'showChangepasswordPage')->name('profile.show.passwordchange');

    Route::post('bank-details', 'storeBankDetails')->name('profile.bank.store');

    Route::put('/{user}', 'updateProfile')->name('profile.update');
    Route::put('bank-details/{user}', 'updateBankDetails')->name('profile.bank.update');
    Route::put('chage-password/{user}', 'changePassword')->name('profile.password.update');
});
