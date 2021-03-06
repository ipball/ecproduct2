<?php

// Home
Route::get('/', 'Front\HomeController@index');

// product
Route::get('product/{id}/{name}', 'Front\ProductController@view');

// cart
Route::prefix('cart')->group(function(){
    Route::get('', 'Front\CartController@index');
    Route::post('add', 'Front\CartController@addItem');
    Route::get('delete', 'Front\CartController@deleteItem');
    Route::get('delete-all', 'Front\CartController@deleteAll');
    Route::post('update', 'Front\CartController@updateItem');
});

// checkout order
Route::prefix('checkout')->group(function(){
    Route::get('', 'Front\OrderController@index');
    Route::post('', 'Front\OrderController@store');
});

// province
Route::prefix('province')->group(function(){
    Route::get('{id}/district', 'Front\DistrictController@getByProvince');   
});