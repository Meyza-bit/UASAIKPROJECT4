<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/tuntunan/{mode}', function ($mode) {
    return view('tuntunan', ['mode' => $mode]);
})->name('tuntunan');