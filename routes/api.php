<?php

use App\Http\Controllers\ErrorCodesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/errorcodes', [ErrorCodesController::class, 'index']);
Route::get('/errorcodes/game', [ErrorCodesController::class, 'page']);
