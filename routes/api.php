<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TuntunanController;

Route::get('/tuntunan/{mode}', [TuntunanController::class, 'data']);