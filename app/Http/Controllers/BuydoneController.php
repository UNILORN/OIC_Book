<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\PRODUCT;
use App\CART;
use Carbon\Carbon;



class BuydoneController extends Controller
{
    public function index(Request $request){
      $user = Auth::user();
      $cart = CART::where('user_id',$user->id)->get();
      $cartarray = [];
      foreach ($cart as $value) {
        $cartarray[] =  $value->product_id;
      }
      $timestamp = Carbon::now()->timestamp;

      $products = PRODUCT::whereIn('product_id',$cartarray)->get();
      $sum = new \App\Service\AuthcartService;
      $sum = $sum->getSum($user->id);

      $uorderadd = new \App\Service\BuydoneService;
      $uorderadd = uorderadd($user,$sum,$timestamp);
      $uorderdetailadd = uorderdetailadd($cartarray,$timestamp);

      $cartdel = new \App\Service\AuthcartService;
      $cartdel = deleteAllItem($user,$cartarry);


      return view('buydone');
    }
}
