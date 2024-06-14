<?php

use App\Http\Controllers\Frontcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('landing', Frontcontroller::class);