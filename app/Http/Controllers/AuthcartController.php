<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthcartController extends Controller
{
      public function index(Request $request)
      {
        $user = $request->user();
        $cart = new \App\Service\AuthcartService;
        $products = $cart->getItems($user->id);
        $sum = $cart->getSum($user->id);

        return view('authcart',compact('products','sum'));
      }

      public function add(Request $request)
      {
        $user = $request->user();
        $cart = new \App\Service\AuthcartService;
        $products = $cart->addItem($user->id,$request->get('product_id'),$request->get('number'));
        $sum = $cart->getSum($user->id);

        return view('authcart',compact('products','sum'));
      }

      public function delete(Request $request)
      {
        $cart = new \App\Service\AuthcartService;
        $user = $request->user();
        $products = $cart->deleteItem($user->id,$request->get('product_id'),$user->id);
        $sum = $cart->getSum($user->id);

        return view('authcart',compact('products','sum'));
      }

      public function numChange(Request $request)
      {
        $user = $request->user();
        $cart = new \App\Service\AuthcartService;
        $cart->numChange($request->get('number'),$request->get('index'),$user->id);
        $products = $cart->getItems($user->id);
        $sum = $cart->getSum($user->id);


        return view('authcart',compact('products','sum'));
      }

}
