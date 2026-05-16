<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\MainController;
//use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/page/{slug}', [PageController::class, 'show']);

Route::prefix('admin')->group(function () {
    Route::get('/', [MainController::class, 'index']);
    Route::get('/pages', [MainController::class, 'pages']);
});

//Route::prefix('products')->group(function () {
//    Route::get('/', [ProductController::class, 'index']);
//    Route::get('/create', [ProductController::class, 'create']);
//    Route::post('/', [ProductController::class, 'store']);
//    Route::get('/{product}', [ProductController::class, 'show']);
//    Route::get('/{product}/edit', [ProductController::class, 'edit']);
//    Route::put('/{product}/edit', [ProductController::class, 'update']);
//    Route::delete('/{product}', [ProductController::class, 'delete']);
//});

//Route::resource('products', ProductController::class)->only(['index', 'show']);

Route::resource('products', ProductController::class)->except(['create', 'store', 'update', 'destroy']);

// Route::get('/hello', function () {
//     return  'hello, Faith';
// });
//
// Route::post('/hello', function () {
//     return  'hello, Faith';
// });
//
// Route::match(['get', 'post', 'put'], '/hello', function () {
//     return  'hello, Faith';
// });
//
// Route::any('/hello',function () {
//     return  'hello, Faith';
// });

// Route::get('/hello', function () {
//     return  view('hello');
// });
