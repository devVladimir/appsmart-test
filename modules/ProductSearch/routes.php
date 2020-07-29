<?php

use Illuminate\Support\Facades\Route;

Route::namespace('\Modules\ProductSearch\Controllers')->group(function () {
    Route::middleware(['web'])->group(function () {
        Route::get('/', 'ProductSearchController@index')->name('product_search.index');
        Route::get('/result', 'ProductSearchController@result')->name('product_search.result');
        Route::put('/save_product', 'ProductSearchController@saveProduct')->name('product_search.save');
    });
});