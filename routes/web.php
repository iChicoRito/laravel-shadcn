<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
    Route::get('login',         [\App\Http\Controllers\Auth\AuthController::class, 'showLogin'])->name('login');
    Route::get('register',      [\App\Http\Controllers\Auth\AuthController::class, 'showRegister'])->name('register');
    Route::post('register',     [\App\Http\Controllers\Auth\AuthController::class, 'register'])->name('register.store');
    Route::get('verify-email',  [\App\Http\Controllers\Auth\AuthController::class, 'verifyEmail'])->name('verify.email');
});

Route::get('/dashboard', function () {return Inertia::render('Dashboard');})->name('dashboard');