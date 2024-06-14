<?php

use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\Frontcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('landing', Frontcontroller::class);

Route::resource('dashboard', Dashboardcontroller::class);
