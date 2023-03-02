<?php

use App\Http\Controllers\Admin\Authcontroller;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ColorController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:admin')->group(function(){

    Route::resource('products', ProductController::class);

    Route::resource('colors', ColorController::class);

    Route::resource('categories', CategoryController::class);

    Route::resource('brands', BrandController::class);

    Route::get('logout', [Authcontroller::class, 'logout'])->name('logout');

});

Route::middleware('guest:admin')->group(function ()
{
    Route::get('login', [Authcontroller::class, 'index'])->name('login');
    Route::post('login_process', [Authcontroller::class, 'login'])->name('login_process');
});





