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
    $products = $this->getItems($user_id);

    return $products;
  }


  public function getItems($user_id){

    $products = CART::where('user_id',$user_id)
    ->with('cartProduct')
    ->get();

    return $products;
  }

  public function deleteItem($user_id,$product_id){

    CART::where('user_id',$user_id)
    ->Where('product_id', $product_id)
    ->delete();

    $products = $this->getItems($user_id);

    return $products;
  }

  public function getSum(){
  }

  public function changeQuantity($index){
  }

  public function allDelete(){
  }
}
