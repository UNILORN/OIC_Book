<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessioncartController extends Controller
{

    public function index()
    {
      $cart = new \App\Service\SessioncartService;
      $products = $cart->getItems();

      return view('sessioncart',compact('products'));
    }

    public function add(Request $request)
    {
      $cart = new \App\Service\SessioncartService;
      $products = $cart->addProduct($request->get("product_id"));

      return view('sessioncart',compact('products'));
    }

    public function delete(Request $request)
    {
      $cart = new \App\Service\SessioncartService;
      $items = $cart->deleteItem($request->get('index'));

      return view('sessioncart',compact('products'));
    }
}
