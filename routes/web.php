<?php
use App\Product;

Auth::routes();
Route::resource('cart', 'CartController');

Route::get('/', 'ProductsController@index')->name('home');
Route::get('/products/{product}', 'ProductsController@show');
Route::get('/delete/{id}', 'ProductsController@deleteProduct');
Route::get('/productList', 'ProductsController@showList');
Route::get('/home', 'HomeController@index');
Route::get('/clear', 'CartController@clear');
Route::post('/saveShippingInfo', 'ShippingInfoController@saveShippingInfo');
Route::get('/paymentDetails', 'ShippingInfoController@paymentDetails'); 