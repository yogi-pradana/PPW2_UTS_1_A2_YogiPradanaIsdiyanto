<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemainController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pemain', PemainController::class);
