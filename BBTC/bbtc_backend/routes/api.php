<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UgyfelController;
use App\Http\Controllers\BefizController;

Route::get('/ugyfel', [UgyfelController::class, 'index']);
Route::post('/ugyfel', [UgyfelController::class, 'store']);
Route::get('/ugyfel/{id}', [UgyfelController::class, 'show']);
Route::put('/ugyfel/{id}', [UgyfelController::class, 'update']);
Route::delete('/ugyfel/{id}', [UgyfelController::class, 'destroy']);

Route::get('/befiz', [BefizController::class, 'index']);
Route::post('/befiz', [BefizController::class, 'store']);
Route::get('/befiz/{id}', [BefizController::class, 'show']);
Route::delete('/befiz/{id}', [BefizController::class, 'destroy']);
Route::get('/befiz/tag/{azon}', [BefizController::class, 'tagBefizetesek']);

