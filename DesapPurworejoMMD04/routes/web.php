<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PotensiController;
use App\Http\Controllers\PemerintahanController;

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/Homepage', [HomepageController::class, 'index']);
Route::get('/potensi', [PotensiController::class, 'index']);
Route::get('/pemerintahan', [PemerintahanController::class, 'index']);
Route::get('/profil', [App\Http\Controllers\ProfileController::class, 'index']);