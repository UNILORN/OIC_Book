<?php

namespace App\Service;

use \App\PRODUCT;
use \App\CART;
use Carbon\Carbon;
use \App\UORDER;
use \App\UORDER_DETAIL;
use \App\User;

class BuydoneService{
  public function uorderadd($user,$sum,$timestamp,$point,$use_point){
    $today = Carbon::now();
    $dadada = UORDER::insert([
        'uorder_id'=>$timestamp,
        'user_id'=>$user->id,
        'uorder_day'=>$today,
        'uorder_price'=>$sum,
        'uorder_use_point'=>$use_point,
        'uorder_add_point'=>$point,
        'uorder_payment'=>1,
        'uorder_cancel'=>0,
        'uorder_auth_cancel'=>0,
        'method_of_payment_id'=>1
    ]);

  }
  public function uorderdetailadd($cart,$timestamp){


    foreach ($cart as $key => $value) {
    UORDER_DETAIL::insert([
        'uorder_id'=>$timestamp,
        'product_id'=>$value->product_id,
        'uorder_number'=>$value->product_cart_number,
        'uorder_details_flug'=>0
    ]);
  }
  }
  public function stockupdate($cart){


    foreach ($cart as $key => $value) {
      $products = PRODUCT::find($cart[$key]->product_id);
      $stock = $products->product_stock - $cart[$key]->product_cart_number;
      $products->product_stock = $stock;
      $products->save();

    };
  }
  public function pointadd($user,$point){
    $user->user_point = $point + intval($user->user_point);
    $user->save();
  }

  public function pointsub($user,$point){
    $user->user_point = intval($user->user_point) - $point;
    $user->save();
  }

}

 ?>
