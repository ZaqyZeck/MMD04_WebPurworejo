<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/Homepage', [HomepageController::class, 'index']);
