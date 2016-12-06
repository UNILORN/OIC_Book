<?php

namespace App\Service;
use App\PRODUCT;

class SessioncartService{

  public function addProduct($product_id,$number)
  {
    $insert_product =  PRODUCT::where('product_id',$product_id)->first();
    $insert_product["product_cart_number"] = $number;
    $current_cart = session()->get("cart",[]);
    /**
    * 選択した商品がすでにカートに入っているかの確認
    **/
    foreach ($current_cart as $cart)
    {
       if($insert_product->product_id == $cart->product_id)
       {
           $products = session()->get("cart",[]);
           return $products;
       }
     }

           $current_cart[] = $insert_product;
           session()->put("cart",$current_cart);
           $products = session()->get("cart",[]);

           return $products;
  }

  public function getTotalfee()
  {
    $products = session()->get("cart",[]);
    $sum = 0;
    foreach ($products as $product)
    {
      $sum += $product->price;
    }

    return $sum;
  }

  public function getItems()
  {
    $products = session()->get("cart",[]);
    return $products;
  }

  public function deleteItem($index)
  {
    session()->forget("cart.$index");
    $products = session()->get("cart",[]);

    return $products;
  }

  public function getSum(){
    $products = session()->get("cart",[]);
    $sum = 0;

    foreach ($products as $key => $product) {
      $sum += $product->product_price*$product->product_cart_number;
    }

    return $sum;
  }

  public function numChange($number,$index)
  {
    $cart = session()->get("cart",[]);
    $cart[$index]['product_cart_number'] = $number;
  }

  public function allDelete()
  {
    session()->flush();
  }
}
