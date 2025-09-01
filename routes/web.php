<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon; //opsional untuk format waktu

Route::get('/', function () {
    return response()->json([
        'status' => 'ok',
        'time' => now()->toISOString(),
    ]);
});
