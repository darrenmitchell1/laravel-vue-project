<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/**
 * API
 */
Route::prefix('api')->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::post('/products', 'store')->name('product.store');       
        Route::put('/products/{product}', 'update')->name('product.update');
        Route::delete('/products/{product}', 'delete')->name('product.delete');
        Route::patch('/products/restore/{product}', 'restore')->name('product.restore');
    });
});


/**
 * WEB
 */
Route::get('/products', function () {
    return view('products');
})->name('product.index');

Route::get('/products/{product}', function () {
    return view('show');
})->name('product.show');
