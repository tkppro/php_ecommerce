<?php

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

Route::get('/', 'HomeController@index')->name('welcome');

Route::group(['prefix' => 'user'], function () {
    Route::get('profile', 'User\UserController@index')->name('user.profile');
    Route::post('profile', 'User\UserController@update')->name('user.update');
    Route::post('suggest', 'User\UserController@requestProduct')->name('user.request');
});

Route::get('/shop', 'ShopController@index')->name('shop.index');

Route::group(['prefix' => 'shop'], function () {
    Route::get('/', 'ShopController@index')->name('shop.index');
    Route::get('{productSlug}', 'ShopController@show')->name('shop.show');
    Route::post('{productSlug}', 'Web\ReviewController@store')->name('review.store');
});

Route::resource('cart', 'CartController')->parameters([
    '/' => 'productSlug',
])->only(['index', 'destroy']);

Route::post('/cart/{productSlug}', 'CartController@store')->name('cart.store');

Auth::routes();
