<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PRODUCT;

class ProductController extends Controller
{
    public function index(){
      $products = PRODUCT::with('productGenre')
        ->with('productTrancelater')
        ->get();


      return view('product',compact('products'));
    }

}
