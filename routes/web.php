<?php

// Home
Route::get('/', 'Front\HomeController@index');

// product
Route::get('product/{id}/{name}', 'Front\ProductController@view');

// cart
Route::prefix('cart')->group(function(){
    Route::get('', 'Front\CartController@index');
    Route::post('add', 'Front\CartController@addItem');
    Route::delete('delete', 'Front\CartController@deleteItem');
    Route::patch('update', 'Front\CartController@updateItem');
});