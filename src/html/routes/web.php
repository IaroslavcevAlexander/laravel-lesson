<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/page/{slug}', [PageController::class, 'show']);

// Route::get('/hello', function () {
//     return  'hello, sasa';
// });
//
// Route::post('/hello', function () {
//     return  'hello, sasa';
// });
//
// Route::match(['get', 'post', 'put'], '/hello', function () {
//     return  'hello, sasa';
// });
//
// Route::any('/hello',function () {
//     return  'hello, sasa';
// });

// Route::get('/hello', function () {
//     return  view('hello');
// });
