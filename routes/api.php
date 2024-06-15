<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipmentController;

Route::post('/equipment', [EquipmentController::class, 'store']);
Route::get('/equipment', [EquipmentController::class, 'index']);
Route::get('/equipment/{id}', [EquipmentController::class, 'show']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
