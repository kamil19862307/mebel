<?php

use App\Http\Controllers\AuthController;
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

Route::get('livewire', [IndexController::class, 'livewire'])->name('livewire');

Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');


Route::get('checkout', [IndexController::class, 'checkout'])->name('checkout');
Route::get('wishlist', [IndexController::class, 'wishlist'])->name('wishlist');
Route::get('profile', [IndexController::class, 'profile'])->name('profile');

Route::middleware('auth')->group(function (){

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

});

Route::middleware('guest')->group(function (){

    Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('register_process', [AuthController::class, 'register'])->name('register_process');

    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login_process', [AuthController::class, 'login'])->name('login_process');

    Route::get('forgot', [AuthController::class, 'showForgotForm'])->name('forgot');
    Route::post('forgot_process', [AuthController::class, 'forgot'])->name('forgot_process');

});
