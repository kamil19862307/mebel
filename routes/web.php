<?php

use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::get('checkout', [IndexController::class, 'checkout'])->name('checkout');
Route::get('wishlist', [IndexController::class, 'wishlist'])->name('wishlist');
Route::get('profile', [IndexController::class, 'profile'])->name('profile');
Route::get('login', [IndexController::class, 'login'])->name('login');
