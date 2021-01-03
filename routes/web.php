<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

//Dashboard routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Register routes
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

//Post routes
Route::get('/posts', function () {
  return view('posts.index');
});
