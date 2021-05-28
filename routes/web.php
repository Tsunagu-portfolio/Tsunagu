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

Route::get('/', function () {
    return view('auth.testlogin');
});

Route::get('/detail/{id}', 'ProductController@show')->name('detail');
Route::post('/addCart', 'CartController@addCart')->name('addCart');
Route::get('/cart/index', 'CartController@index')->name('cart.index');
Route::post('/cart/list_delete', 'CartController@delete')->name('cartItemDelete');
Route::post('/CartFinalized', 'CartController@store')->name('cartFinalized');

Auth::routes();

Route::get('/top', 'ProductController@index')->name('top');
