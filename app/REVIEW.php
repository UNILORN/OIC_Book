<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class REVIEW extends Model
{
  protected $table = 'REVIEW_TABLE';

  public function reviewUser(){
    return $this->hasMany('App\USER','user_id','user_id');
  }
  public function reviewProduct(){
    return $this->hasMany('App\PRODUCT', 'product_id', 'product_id');
  }
}
