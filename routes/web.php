<?php

use App\Http\Controllers\PdController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('biodata', [PdController::class, 'index']);
Route::get('input', [PdController::class, 'create']);
Route::post('input', [PdController::class, 'store']);