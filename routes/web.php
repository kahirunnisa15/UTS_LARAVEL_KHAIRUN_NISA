<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

// LOGIN
Route::get('/login', [LoginController::class, 'showLoginForm'])
    ->name('login');

Route::post('/login', [LoginController::class, 'loginUser']);

// USERS
Route::get('/users', [UserController::class, 'index'])
    ->name('users.index');

Route::get('/users/create', [UserController::class, 'create'])
    ->name('users.create');

Route::post('/users', [UserController::class, 'store'])
    ->name('users.store');

Route::get('/users/{id}/edit', [UserController::class, 'edit'])
    ->name('users.edit');

Route::put('/users/{id}', [UserController::class, 'update'])
    ->name('users.update');

Route::delete('/users/{id}', [UserController::class, 'destroy'])
    ->name('users.destroy');