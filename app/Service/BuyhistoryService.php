<?php

namespace App\Service;

use \App\PRODUCT;
use DB;

class BuyhistoryService{
  public function getHistory($user_id){
    $histories = DB::table('UORDERDETAILS')
    ->join('UORDER','UORDERDETAILS.uorder_id' ,'=', 'UORDER.uorder_id')
    ->join('PRODUCT','UORDERDETAILS.product_id' ,'=', 'PRODUCT.product_id')
    ->select('PRODUCT.*','UORDER.*')
    ->where('UORDER.user_id','=', $user_id)
    ->get();
    return $histories;
  }
}
