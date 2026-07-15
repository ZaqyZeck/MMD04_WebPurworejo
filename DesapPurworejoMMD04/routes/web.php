<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PotensiController;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/Homepage', [HomepageController::class, 'index']);
Route::get('/potensi', [PotensiController::class, 'index']);
