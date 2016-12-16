<?php

namespace App\Service;

use \App\PRODUCT;
use \App\CART;
use Carbon\Carbon;
use \App\UORDER;
use \App\UORDER_DETAIL;
class BuydoneService{
  public function uorderadd($user,$sum,$timestamp,$point){
    $today = Carbon::now();
    UORDER::insert([
        'uorder_id'=>$timestamp,
        'user_id'=>$user->id,
        'uorder_day'=>$today,
        'uorder_price'=>$sum,
        'uorder_use_point'=>0,
        'uorder_add_point'=>$point,
        'uorder_payment'=>0,
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

}

 ?>
