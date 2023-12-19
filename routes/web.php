<?php

use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\SaleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;


Route::get('/', DashboardController::class)->name('dashboard.index');


Route::group(['prefix' => 'dashboard', 'name' => 'dashboard.'], function() {
    Route::resource('product', ProductController::class);
    Route::resource('sale', SaleController::class);
});
