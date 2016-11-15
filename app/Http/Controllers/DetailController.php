<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PRODUCT;

class DetailController extends Controller
{
    public function index(){
      $product = PRODUCT::where('product_id',102)->first();
        return view('detail',compact('product'));
    }
}
