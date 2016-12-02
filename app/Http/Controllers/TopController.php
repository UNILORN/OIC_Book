<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TopController extends Controller
{
  public function index(Request $request){
    $top = new \App\Service\TopService;
    $ranking_products = $top->getRanking();

    /****
    *   ログイン時のsession情報の引き継ぎ
    ****/
    if (!empty(session()->get("cart",[])))
    {
      $products = session()->get("cart",[]);
      $user = $request->user();
      $cart = new \App\Service\AuthcartService;
      $cart->sessionTakeover($user->id,$products);
    }

    return view('top',compact('ranking_products'));
  }
}
