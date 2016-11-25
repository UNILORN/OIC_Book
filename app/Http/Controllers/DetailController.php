<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PRODUCT;

class DetailController extends Controller
{
    public function index(){
      $product = PRODUCT::find(20)
      ->with('productGenre')
      ->first();
        return view('detail',compact("product"));
    }
}
