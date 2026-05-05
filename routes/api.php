<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::post('/login-register', [AuthController::class, 'loginRegister']);
Route::post('/request-otp', [AuthController::class, 'requestOtp']);
