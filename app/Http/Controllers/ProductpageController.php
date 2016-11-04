<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PRODUCT;

class ProductpageController extends Controller
{
    public function index(){
      $books = PRODUCT::with('productGenre')
        ->with('productTrancelater')
        ->get();
      echo $books;
    }

}
