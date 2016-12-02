<?php

namespace App\Service;
use App\PRODUCT;

class SessioncartService{

  public function addProduct($product_id,$number){

    $product =  PRODUCT::where('product_id',$product_id)->first();
    $product["number"] = $number;
    $cart = session()->get("cart",[]);
    $cart[] = $product;

    session()->put("cart",$cart);
    $products = session()->get("cart",[]);

    return $products;
  }

  public function getTotalfee(){

    $products = session()->get("cart",[]);
    $sum = 0;
    foreach ($products as $product) {
      $sum += $product->price;
    }

    return $sum;
  }

  public function getItems(){

    $products = session()->get("cart",[]);

    return $products;
  }

  public function deleteItem($index){

    session()->forget("cart.$index");
    $products = session()->get("cart",[]);

    return $products;
  }

  public function changeQuantity($index){
  }

  public function allDelete(){
    session()->flush();
  }
}
