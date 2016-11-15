<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\UORDER;
use App\PRODDUCT;


class UORDER_DETAIL extends Model
{
    protected $table = 'UORDERDETAILS';

    public function uorderDetail(){
      return $this->hasMany('App\UORDER','uorder_id','uorder_id');
    }
    public function uorderProduct(){
      return $this->hasMany('App\PRODUCT','product_id','product_id');
    }
}
