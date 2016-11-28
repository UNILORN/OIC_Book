<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PRODUCT;

class DetailController extends Controller
{
    public function index(Request $request){
      $product = PRODUCT::where('product_id',$request->get('product_id'))
      ->with('productGenre')
      ->first();

      $reviews = new \App\Service\ReviewService;
      $reviews = $reviews->getReview($request->get('product_id'));

        return view('detail',compact("product","reviews"));
    }
}
