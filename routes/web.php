<?php

use App\Http\Controllers\ClubController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon; //opsional untuk format waktu

Route::get('/', function () {
    return response()->json([
        'status' => 'ok',
        'time' => now()->toISOString(),
    ]);
});

Route::get('/clubs', [ClubController::class, 'index']);