<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessioncartController extends Controller
{
    public function index()
    {
      $cart = new \App\Service\SessioncartService;
      $products = $cart->getItems();
      $sum = $cart->getSum();

      return view('sessioncart',compact('products','sum'));
    }

    public function add(Request $request)
    {
      $cart = new \App\Service\SessioncartService;
      $products = $cart->addProduct($request->get("product_id"),$request->get("number"));
      $sum = $cart->getSum();

      return view('sessioncart',compact('products','sum'));
    }

    public function delete(Request $request)
    {
      $cart = new \App\Service\SessioncartService;
      $products = $cart->deleteItem($request->get('index'));
      $sum = $cart->getSum();

      return view('sessioncart',compact('products','sum'));
    }

    public function numChange(Request $request)
    {
      $number = $request->get('number');
      $index = $request->get('index');
      $cart = new \App\Service\SessioncartService;
      $products = $cart->numChange($number,$index);
      $sum = $cart->getSum();


      return view('sessioncart',compact('products','sum'));
    }
}
