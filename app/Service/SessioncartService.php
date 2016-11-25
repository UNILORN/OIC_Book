<?php

namespace App\Service;
use App\PRODUCT;

class SessioncartService{

  public function addItem($product_id){
    $item =  PRODUCT::where('product_id',$product_id)
              ->first();
    $cart = session()->get("cart",[]);
    $cart[] = $item;
    session()->put("cart",$cart);
    $items = session()->get("cart",[]);
    return $items;
  }

  public function getSum(){
    $items = session()->get("cart",[]);
    $sum = 0;
    foreach ($items as $item) {
      $sum += $item->price;
    }
    return $sum;
  }

  public function getItems(){
    $items = session()->get("cart",[]);
    return $items;
  }

  public function deleteItem($index){
    session()->forget("cart.$index");
    $items = session()->get("cart",[]);
    return $items;
  }

  public function changeQuantity($index){
  }

  public function allDelete(){
    session()->flush();
  }
}
