<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessioncartController extends Controller
{

    public function index()
    {
      $cart = new \App\Service\SessioncartService;
      $items = $cart->getItems();
      $sum = $cart->getSum();
      return view('sessioncart',compact('items','sum'));
    }

    public function add(Request $request)
    {
      $cart = new \App\Service\SessioncartService;
      $items = $cart->addItem($request->get("id"));
      $sum = $cart->getSum();

      return view('sessioncart',compact('items','sum'));
    }

    public function delete(Request $request)
    {
      $cart = new \App\Service\SessioncartService;
      $items = $cart->deleteItem($request->get('index'));
      $sum = $cart->getSum();

      return view('sessioncart',compact('items','sum'));
    }
}
