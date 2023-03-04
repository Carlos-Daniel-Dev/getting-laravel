<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserStoreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductStoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
    
Route::get('/user/create', [UserController::class, 'index']);
Route::get('/user', UserStoreController::class);
Route::resource('/product', ProductController::class)->except('store');
Route::post('/product', ProductStoreController::class);
Route::post('/product', ProductStoreController::class);