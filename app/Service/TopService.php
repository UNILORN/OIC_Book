<?php
namespace App\Service;

use DB;

class TopService{
  public function getRanking(){
    $ranking = DB::table('UORDERDETAILS')
    ->join('UORDER','UORDERDETAILS.uorder_id' ,'=', 'UORDER.uorder_id')
    ->join('PRODUCT','UORDERDETAILS.product_id' ,'=', 'PRODUCT.product_id')
    ->select('PRODUCT.product_id','PRODUCT.product_image','PRODUCT.product_price','PRODUCT.product_name')
    ->where('UORDER.uorder_payment' ,'=', 1)
    ->groupBy('UORDERDETAILS.product_id')
    ->orderBy(DB::raw('count(UORDERDETAILS.product_id)'),'desc')
    ->limit(5)
    ->get();




    return $ranking;
  }
}
