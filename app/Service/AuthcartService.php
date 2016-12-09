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

    /***
    *　カートに商品がなければ追加すでに入っていれば数量更新
    ***/
    if (empty($already)) {
      DB::table('CART')->insert(
        [ 'user_id' => $user_id,
        'product_id' => $product_id,
        'product_cart_number' => $number
        ]
      );
    }else{
      CART::where('user_id', $user_id)
      ->where('product_id', $product_id)
      ->update(['product_cart_number' => $number]);
    }

    $products = $this->getItems($user_id);

    return $products;
  }

  public function getItems($user_id)
  {
    $products = CART::where('user_id',$user_id)
    ->with('cartProduct')
    ->get();

/*  dataがシードだから整合性取れてなくて動かせない
    $a = DB::table('CART')
    ->join('PRODUCT','CART.product_id' ,'=', 'PRODUCT.product_id')
    ->join('AUTHERCROSS','AUTHERCROSS.product_id' ,'=', 'PRODUCT.product_id')
    ->join('AUTHER','AUTHERCROSS.auther_id' ,'=', 'AUTHER.auther_id')
    ->select('PRODUCT.*','CART.*','AUTHERCROSS.*')
    ->where('CART.user_id' ,'=', $user_id)
    ->get();

    var_dump($a);
*/
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
  public function deleteAllItem($user,$cartarray)
  {
    CART::whereIn('user_id',$user)
    ->WhereIn('product_id', $cartarray)
    ->delete();
  }

  public function sessionTakeover($user_id,$products)
  {
    foreach ($products as $product)
    {
      $product_id = $product->product_id;
      $number = $product->product_cart_number;
      $this->addItem($user_id,$product_id,$number);
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

  public function numChange($number,$product_id,$user_id)
  {
    $cart = CART::where('user_id',$user_id)
    ->where('product_id',$product_id)
    ->update(['product_cart_number' => $number]);
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
