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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'TOPpageController@index');
Route::resource('/search', 'SearchpageController');
Route::get('/product', 'ProductpageController@index');
Route::resource('/cart', 'CartpageController@index');


//管理者ページ
Route::get('/admin','AdmintopController@show');
Route::resource('/admin/stock','AdminstockController');
Route::resource('/admin/employee','AdminemployeeController');
Route::get('/admin/sales','AdminsalesController@show');
Route::get('/admin/history','AdminhistoryController@show');
Route::get('/admin/order','AdminorderController@show');
Route::get('/admin/arrive','AdminarriveController@show');
Route::get('/admin/payment','AdminpaymentController@show');
