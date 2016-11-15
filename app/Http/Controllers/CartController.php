<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PRODUCT;

class CartController extends Controller
{
  public function index(Request $request){
      $product = PRODUCT::where('product_id',$request->get('id'))->first();
    return view('cart',compact('product'));
  }
}
