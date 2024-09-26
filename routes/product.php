<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::controller(ProductController::class)->group(function () {
    Route::prefix('api')->group(function () {
        Route::post('/products', 'store')->name('product.store');       
        Route::put('/products/{product}', 'update')->name('product.update');
        Route::delete('/products/{product}', 'delete')->name('product.delete');
        Route::patch('/products/restore/{product}', 'restore')->name('product.restore');
    });

    Route::get('/products', 'index')->name('product.index');
    Route::get('/products/{product}', 'show')->name('product.show');
});
