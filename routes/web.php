<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function() {
//     return "home";
// });

// Route::get('/users/{id}', function($id) {
//     return 'user ' . $id;
// });

// Route::get('/posts/{post}/comments/{comment}', function($post, $commentId) {
//     return "post: " . $post . "commentID: " . $commentId;
// });

// Route::get('/user/{name?}', function($name = "John") {
//     return $name;
// });

// Route::get('/users/{id}/{name}', function($id, $name) {
//     return $id . $name;
// })->whereNumber('id')->whereAlpha('name');

// Route::get('/users/{id}', function($id) {
//     return $id;
// })->whereNumber('id');

// Route::get('/search/{search}', function($search) {
//     return $search;
// })->where('search', '.*');

Route::get('/user/profile',
            [UserProfileController::class, 'show']
)->name('profile');

$url = route('profile', ['id' => 1]);
    