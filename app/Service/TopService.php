<?php
namespace App\Service;

use App\UORDER;
use App\UORDER_DETAIL;
use App\PRODUCT;
use DB;

class TopService{
  public function getRanking(){

    //入金済み商品
    $payment_flag_1 = UORDER::select('uorder_id')
    ->where('uorder_payment',1)
    ->get();

    foreach ($payment_flag_1 as $key => $value) {
      $payment1_uorder_id[] = $value->uorder_id;
    }


    //ランキング
    $ranking_products = UORDER_DETAIL::select(DB::raw('count(product_id)'),'product_id')
    ->whereIn('uorder_id',$payment1_uorder_id)
    ->groupBy('product_id')
    ->orderBy(DB::raw('count(product_id)'),'desc')
    ->limit(5)
    ->get();

    foreach ($ranking_products as $key => $ranking_product) {
      $ranking[] = PRODUCT::where('product_id',$ranking_product->product_id)
      ->get();
    }

    return $ranking;
  }
}
