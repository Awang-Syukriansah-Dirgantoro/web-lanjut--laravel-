<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [ProductController::class,'home']);

Route::prefix('product')->group(function () {
    Route::get('/{link}', [ProductController::class,'product']);
});

Route::get('/news/{link}', [ProductController::class,'newsl']);

Route::prefix('program')->group(function () {
    Route::get('/{link}', [ProductController::class,'program']);
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', [ProductController::class,'us']);