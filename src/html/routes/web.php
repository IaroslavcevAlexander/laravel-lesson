<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/register', [\App\Http\Controllers\UserController::class, 'create'])->name('register');
Route::get('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'contact'])->name('contact');

