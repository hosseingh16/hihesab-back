<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/ping', function (Request $request) {
    return response()->json([
        'message' => 'pong',
        'user' => $request->user(), // اگه لاگین باشی پر میشه
    ]);
});
