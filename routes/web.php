<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TuntunanController; // <-- WAJIB DI SINI (Paling atas)

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/tuntunan/{mode}', function ($mode) {
    return view('tuntunan', ['mode' => $mode]);
})->name('tuntunan');

Route::get('/tuntunan-sholat/{id?}', [TuntunanController::class, 'show'])->name('sholat.step');