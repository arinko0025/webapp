<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/top','TopController@index');
Route::get('/item','ItemController@index');
Route::get('/detail','ItemController@detail');
Route::get('/cart','CartController@index');
Route::get('/mypage','MypageController@index');
Route::get('/buy','BuyController@index');
Route::get('/completion','CompletionController@index');
