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

Route::get('/product', 'ProductController@show');

Route::get('/category', 'CategoryController@index');

Route::get('/category/{task}', 'CategoryController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
