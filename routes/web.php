<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;

// Home
Route::get('/', [HomeController::class, 'home']);

// Products 
Route::prefix('product')->group(function () { 
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']); 
    Route::get('/baby-kid', [ProductController::class, 'babyKid']); 
});

// User
Route::get('/user/{id}/name/{name}', [UserController::class, 'user']);

// Sales
Route::get('/penjualan', [SalesController::class, 'sales']); 
