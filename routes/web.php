<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Home routes
Route::get('/home', [HomeController::class, 'index'])->name('home');

//Dashboard routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Register routes
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

//Logout routes - Needs to be post to protect from cross site attack
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

//Register routes
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

//Post routes
Route::get('/posts', function () {
  return view('posts.index');
});
