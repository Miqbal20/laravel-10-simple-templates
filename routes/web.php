<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);

Route::get('/login',[AuthController::class, 'index'])->name('login');
Route::post('/login',[AuthController::class, 'store'])->name('login.store');
Route::get('/logout',[AuthController::class, 'destroy'])->name('logout');

Route::resource('dashboard', DashboardController::class);

Route::resource('register', RegisterController::class);