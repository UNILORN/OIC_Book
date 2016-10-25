<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class POST extends Model
{
    protected $table = 'POST_TABLE';

    public funciton postProduct(){
      return $this->hasMany('App\PRODUCT', 'product_id', 'product_id');
    }
}
