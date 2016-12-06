<?php

namespace App\Service;

use \App\PRODUCT;
use \App\CART;
use Carbon\Carbon;

class BuydoneService{
  public function uorderadd($user,$sum,$timestamp){
    $today = Carbon::now();
    UORDER::insert([
        'uorder_id'=>$timestamp,
        'user_id'=>$user,
        'uorder_day'=>$today,
        'uorder_price'=>$sum,
        'uorder_point'=>0,
        'uorder_add_point'=>0,
        'uorder_payment'=>0,
        'uorder_cancel'=>0,
        'uorder_auth_cansel'=>0,
        'method_of_payment'=>1
    ]);

  }
  public function uorderdetailadd($cartarray,$timestamp){
    foreach ($cartarray as $key => $value) {

    UORDERDETAIL::insert([
        'uorder_id'=>$timestamp,
        'product_id'=>$value->product_id,
        'uorder_number'=>$value->product_cart_number,
        'uorder_details_flug'=>0
    ]);
  }
  }

}

 ?>
