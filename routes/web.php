<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [PageController::class, 'welcome']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/profile', [PageController::class, 'profile']);

Route::get('/beranda', [PageController::class, 'beranda']);

Route::get('/products', [ProductController::class, 'index']);