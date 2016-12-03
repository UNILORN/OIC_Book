<?php

namespace App\Service;
use App\PRODUCT;

class SessioncartService{

  public function addProduct($product_id,$number)
  {
    $insert_product =  PRODUCT::where('product_id',$product_id)->first();
    $insert_product["number"] = $number;
    $current_cart = session()->get("cart",[]);

    foreach ($current_cart as $current_cart)
    {
      if($insert_product->product_id === $current_cart->product_id)
      {
          $products = session()->get("cart",[]);
          return $products;
      }
    }

    $cart[] = $insert_product;
    session()->put("cart",$cart);
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

  public function changeQuantity($index){}

  public function allDelete()
  {
    session()->flush();
  }
}
