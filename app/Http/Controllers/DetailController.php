<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PRODUCT;

class DetailController extends Controller
{
    public function index(Request $request){
      $product = PRODUCT::find(20)
      ->with('productGenre')
      ->first();

      $reviews = new \App\Service\ReviewService;
      $reviews = $reviews->getReview(1);

        return view('detail',compact("product","reviews"));
    }
}
