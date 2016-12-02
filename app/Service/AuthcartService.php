<?php

namespace App\Service;
use Illuminate\Http\Request;
use App\PRODUCT;
use App\CART;
use DB;

class AuthcartService{

  public function addItem($user_id,$product_id,$number)
  {
    $already = CART::where('user_id',$user_id)
    ->where('product_id',$product_id)
    ->first();

    if (empty($already)) {
      DB::table('CART')->insert(
        [ 'user_id'=> $user_id,
        'product_id' => $product_id,
        'product_cart_number'=>$number
      ]
    );
    }

    $products = $this->getItems($user_id);

    return $products;
  }

  public function getItems($user_id)
  {
    $products = CART::where('user_id',$user_id)
    ->with('cartProduct')
    ->get();

    return $products;
  }
  public function deleteItem($user_id,$product_id)
  {
    CART::where('user_id',$user_id)
    ->Where('product_id', $product_id)
    ->delete();

    $products = $this->getItems($user_id);

    return $products;
  }

  public function sessionTakeover($user_id,$products)
  {
    foreach ($products as $product)
    {
      $product_id = $product->product_id;
      $this->addItem($user_id,$product_id,null);
    }

    for($i = 0;$i < count($products);$i++){ session()->forget("cart.$i"); }
  }

  public function getSum($user_id)
  {
   $sum = 0;
   $products = $this->getItems($user_id);

   foreach ($products as $product){
     $sum += $product->cartProduct[0]->product_price*$product->product_cart_number;
   }

   return $sum;
  }

  /*  使ってる場所不明なので一時コメントアウト
  *
  public function getQuantity()
  {
  $user = Auth::user();
  $products = $this->getItems($user->id);
  $quantity = count($quantity);

  return $quantity;
  }
  *
  */
  
  public function changeQuantity($index){
  }

  public function allDelete(){
  }
}
