<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/login',                 function () { return Inertia::render('auth/Login');});
Route::get('/dashboard',             function () { return Inertia::render('Dashboard');});