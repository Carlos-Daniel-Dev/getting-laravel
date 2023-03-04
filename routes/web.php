<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::resource('user', UserController::class)->names([
    'create' => 'create.user',
    'store' => 'store.user'
])->only(['index', 'store', 'create']);


Route::get('/teste', function() {
    return redirect()->route('create.user');
});


    