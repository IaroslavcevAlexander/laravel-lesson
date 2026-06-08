<?php

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/register', [\App\Http\Controllers\UserController::class, 'create'])->name('register');
Route::post('/register', [\App\Http\Controllers\UserController::class, 'store'])->name('register.store');
Route::get('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'contact'])->name('contact');
Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
