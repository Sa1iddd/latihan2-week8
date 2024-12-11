<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\UserController;

Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/register', [UserController::class, 'showRegisterForm']);
Route::post('/register', [UserController::class, 'register']);

// Sign In Page
Route::get('/signin', function () {
    return view('signin');
})->name('signin');

// Sign Up Page
Route::get('/signup', function () {
    return view('signup');
})->name('signup');

// Blog Page
Route::get('/blog', function () {
    return view('blog');
})->name('blog');

// Profile Page
Route::get('/profile', function () {
    return view('profile');
})->name('profile');


