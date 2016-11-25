<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PRODUCT;

class SearchController extends Controller
{
  public function index()
  {
      $products = PRODUCT::all();
      return view('search',compact('products'));
  }
}
