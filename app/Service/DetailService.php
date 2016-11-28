<?php

namespace App\Service;

use \App\PRODUCT;

class DetailService{
  public function getDetail($product_id){
    
    $detail = PRODUCT::where('product_id',$product_id)->first();
    return $detail;
  }
}
