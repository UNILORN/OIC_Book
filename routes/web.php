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

Route::get('/', 'TopController@index');


//新規登録
Route::resource('/signup','SignupController');
Route::get('/signup_confirm','ConfirmController@signup');
//商品
Route::get('/product', 'ProductsController@index');
Route::get('/detail','DetailController@index');
//カート
Route::resource('/cart', 'CartController');
//購入
Route::get('/buy','BuyController@index');
Route::get('/buy_confirm','ConfirmController@buy');
//ログイン
//Route::resource('/login','LoginController');
//マイページ
Route::resource('/mypage','MypageController');
//退会処理
Route::get('/recede','RecedeController@index');
Route::get('/recede_confirm','ConfirmController@recode');

//管理者ページ
Route::get('/admin','AdmintopController@index');
Route::resource('/admin/stock','AdminstockController');
Route::resource('/admin/employee','AdminemployeeController');
Route::resource('/admin/user','AdminuserController');
Route::get('/admin/uoderdetail','AdminuoderdetailController@index');
Route::get('/admin/history','AdminhistoryController@index');
Route::get('/admin/order','AdminorderController@index');
Route::get('/admin/arrive','AdminarriveController@index');
Route::get('/admin/payment','AdminpaymentController@index');

//管理者用フォーム
Route::get('/admin/payment_form','AdminpaymentController@submit');

Auth::routes();

Route::get('/home', 'HomeController@index');
