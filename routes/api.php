<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/createuser', [UserController::class, 'createuser']);
Route::post('/login', [UserController::class, 'loginuser']);
Route::get('/users', [UserController::class, 'allusers'])->middleware('auth:sanctum');
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth:sanctum');

Route::resource('/contact', ContactController::class)->middleware('auth:sanctum');