<?php

namespace App\Service;
use App\PRODUCT;
use App\CART;

use DB;

class AuthcartService{

  public function addItem($user_id,$product_id,$number){

    DB::table('CART')->insert(
      [ 'user_id'=> $user_id,
        'product_id' => $product_id,
        'product_cart_number'=>$number
      ]
    );
    $items = $this->getItems($user_id);

    return $items;
  }

  public function getSum(){
  }

  public function getItems($user_id){
    $items = CART::with('cartProduct')
    ->with('cartUsers')
    ->where('user_id',$user_id)
    ->get();

    return $items;
  }

  public function deleteItem($user_id,$product_id){
     CART::where('user_id',$user_id)
    ->Where('product_id', $product_id)
    ->delete();

    $items = $this->getItems($user_id);
    return $items;
  }

  public function changeQuantity($index){
  }

  public function allDelete(){
  }

}
