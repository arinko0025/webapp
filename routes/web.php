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
Route::post('/cart','CartController@store');
Route::post('/cart/delete','CartController@destroy');
Route::get('/mypage','MypageController@index');
Route::get('/buy','BuyController@index');
Route::get('/completion','CompletionController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/logout',function(){
  Auth::logout();
  return redirect('/top');
});
