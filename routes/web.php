<?php

use App\Http\Controllers\OTPController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/index', function () {
        return view('index');
    })->name('index');

    Route::middleware(['OTPVerified'])->group(function () {
        Route::get('/home', [UserController::class, 'index'])->name('home');
    });


    Route::prefix('otp')->group(function () {
        Route::get('/page', [OTPController::class, 'index'])->name('otp.index');
        Route::post('/verify', [OTPController::class, 'verifyOTP'])->name('verify.otp');
    });
});


require __DIR__.'/auth.php';
