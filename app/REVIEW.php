<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class REVIEW extends Model
{
  protected $table = 'REVIEW';

  public function reviewUsers(){
    return $this->hasMany('App\User','id','user_id');
  }
  public function reviewProduct(){
    return $this->hasMany('App\PRODUCT', 'product_id', 'product_id');
  }
}
