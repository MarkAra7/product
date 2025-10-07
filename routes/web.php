<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::get('/products/{id}/show', [ProductController::class, 'show']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);
