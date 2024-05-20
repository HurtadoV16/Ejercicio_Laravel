<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CamionController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\CamioneroController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('camioneros', CamioneroController::class);
