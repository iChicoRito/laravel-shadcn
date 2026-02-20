<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('auth/login',         function () { return Inertia::render('auth/Login');});
Route::get('auth/register',      function () { return Inertia::render('auth/Register');});

Route::get('/dashboard',         function () { return Inertia::render('Dashboard');});