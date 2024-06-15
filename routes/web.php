<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cart', function () {
    return view('pages.client.cart');
})->name('cart');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/equipment/create', function () {
        return view('pages.admin.create-equipment');
    })->name('equipment.create');
});
