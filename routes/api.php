<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/login', LoginController::class);
Route::post('/register', RegisterController::class);

Route::middleware('auth:api')->post('/logout', LogoutController::class);
Route::middleware('auth:api')->get('/profile', [ProfileController::class, 'show']);
