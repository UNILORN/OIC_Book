<?php

namespace App\Service;

use App\REVIEW;
use DB;
use Carbon\Carbon;

class ReviewService{

  public function getReview($product_id)
  {
    $reviews = REVIEW::with('reviewProduct')
    ->with('reviewUsers')
    ->where('product_id',$product_id)
    ->get();

    return $reviews;
  }

  public function addReview($product_id,$user_id,$star,$text){

    DB::table('REVIEWS')->insert(
      [ 'product_id'=> $product_id,
        'user_id' => $user_id,
        'review' => $star,
        'review_text' => $text,
        'entry_time' =>Carbon::now()
      ]
    );

    return  $this->getReview($product_id);
  }
}
