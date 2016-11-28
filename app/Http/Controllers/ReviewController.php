<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\PRODUCT;

class ReviewController extends Controller
{
    public function add(Request $request){
      $product = PRODUCT::where('product_id',$request->get('product_id'))
      ->with('productGenre')
      ->first();

       $reviews = new \App\Service\ReviewService;
       $user = $request->user();
       $reviews = $reviews->addReview($request->input('product_id'),$user->id,(int)$request->input('star'),$request->input('text'));


       return view('detail',compact('product','reviews'));
    }
}
