<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;



Route::get('/', function () {
    return view('welcome'); 
});

Route::prefix('login')->group(function () {
    Route::get('/index', [ProductController::class, 'index']);
    Route::post('/validation', [ProductController::class, 'validation']);
    Route::post('/save', [ProductController::class, 'add']);
});

Route::prefix('product')->group(function () {
    Route::get('/index', [ProductController::class, 'index']);
    Route::get('/add', [ProductController::class, 'add']);
    Route::post('/save', [ProductController::class, 'save']);
    Route::get('/edit/{id}', [ProductController::class, 'edit']);
    Route::put('/update/{id}', [ProductController::class, 'update']);
    Route::get('/delete/{id}', [ProductController::class, 'delete']);
});
