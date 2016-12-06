<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\CART;
use App\PRODUCT;

class ConfirmController extends Controller
{
  public function index(){
    return view('confirm');
  }
  public function signup(){

  }
  public function buy(Request $request){

    if($request->input('buy') == 1){
      $buy=('銀行振込');
    }
    elseif($request->input('buy')==null){
      $buy=('選択されていません');
    }

    $user = Auth::user();
    $cart = CART::where('user_id',$user->id)->get();
    $cartarray = [];
    foreach ($cart as $value) {
      $cartarray[] =  $value->product_id;
    }
    $products = PRODUCT::whereIn('product_id',$cartarray)->get();
    $sum = new \App\Service\AuthcartService;
    $sum = $sum->getSum($user->id);

    return view('buy_confirm',compact('buy','user','cart','products','sum'));
  }
  public function recede(){

  }
}
