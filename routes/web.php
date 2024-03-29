<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PresensiController;
Route::get('/', function () {
    return view('home');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/gaji', [GajiController::class, 'index']);

Route::get('/masterjabatan', [JabatanController::class, 'index']);

Route::get('/presensi', [PresensiController::class, 'index']);

