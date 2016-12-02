<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthcartController extends Controller
{
      public function index(Request $request)
      {
        $user = $request->user();
        $cart = new \App\Service\AuthcartService;

        /****
        *   ログイン時のsession情報の引き継ぎ
        ****/
        if (!empty(session()->get("cart",[])))
        {
          $products = session()->get("cart",[]);
          $cart->sessionTakeover($user->id,$products);
        }

        $products = $cart->getItems($user->id);

        return view('authcart',compact('products'));
      }

      public function add(Request $request)
      {
        $user = $request->user();
        $cart = new \App\Service\AuthcartService;
        $products = $cart->addItem($user->id,$request->get('product_id'),$request->get('number'));

        return view('authcart',compact('products'));
      }

      public function delete(Request $request)
      {
          $user = $request->user();
          $cart = new \App\Service\AuthcartService;
          $products = $cart->deleteItem($user->id,$request->get('product_id'));

        return view('authcart',compact('products'));
      }
}
