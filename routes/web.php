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
Route::get('/logout',function(){
  Auth::logout();
  return redirect('/');
});

//新規登録
Route::resource('/signup','SignupController');
Route::get('/signup_confirm','ConfirmController@signup');

//商品
Route::get('/product', 'ProductsController@index');
Route::get('/detail','DetailController@index');

//レビュー
Route::post('/addreview','ReviewController@add');

//商品一覧
Route::get('/search','SearchController@index');

//sessionカート
Route::get('/sessioncart', 'SessioncartController@index');
Route::post('/addsessioncart','SessioncartController@add');
Route::post('/delsessioncart','SessioncartController@delete');
Route::get('/sessionnumchange','SessioncartController@numChange');

//authカート
Route::get('/authcart', 'AuthcartController@index');
Route::post('/addauthcart','AuthcartController@add');
Route::post('/delauthcart','AuthcartController@delete');
Route::get('/authnumchange','AuthcartController@numChange');

//マイページ
Route::resource('/mypage','MypageController');
Route::get('buyhistory','BuyhistoryController@index');

//購入
Route::get('/buy','BuyController@index');
Route::post('/buy_confirm','ConfirmController@buy');

//退会処理
Route::get('/recede','RecedeController@index');
Route::get('/recede_confirm','ConfirmController@recode');


//管理者ページ
Route::get('/admin','AdmintopController@index');
Route::resource('/admin/stock','AdminstockController');
Route::post('/admin/stock/{id}/update','AdminstockController@update');
Route::post('/admin/stock/{id}/delete','AdminstockController@destroy');
Route::resource('/admin/employee','AdminemployeeController');
Route::post('/admin/employee/{id}/update','AdminemployeeController@update');
Route::resource('/admin/user','AdminuserController');
Route::get('/admin/uoderdetail','AdminuoderdetailController@index');
Route::get('/admin/order','AdminorderController@index');
Route::resource('/admin/arrive','AdminarriveController');
Route::get('/admin/payment','AdminpaymentController@index');
Route::get('/admin/payment_form','AdminpaymentController@submit');
Route::get('/admin/pay_form','AdminpaymentController@cancel');
Route::get('/admin/mailform','AdminmailController@index');
Route::post('/admin/mailform','AdminmailController@send');
