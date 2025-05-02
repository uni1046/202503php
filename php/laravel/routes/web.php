<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'home'])->name('home');

Route::get('/login', [SessionsController::class , 'create'])->name('login');
Route::post('/login', [SessionsController:: class, 'store'])->name('login.store');
Route::post('/logout', [SessionsController:: class, 'destroy'])->name('logout');

Route::get('/register', [UsersController::class, 'create'])->name('register');
Route::post('/register', [UsersController::class, 'store'])->name('register.store');

Route::get('/users/{id?}', [UsersController::class, 'show'])->name('users.show');
