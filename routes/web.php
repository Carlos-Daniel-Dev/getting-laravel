<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/product/{id}', [ProductController::class, 'edit'])->name('product.edit');


Route::get('/teste', function() {
    // return redirect()->route('product', ['id' => 45]);
    return redirect()->action([ProductController::class, 'edit']);
});