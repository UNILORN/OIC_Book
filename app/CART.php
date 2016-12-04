<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CART extends Model
{
    protected $table = 'CART';

    public function cartUser()
   {
     return $this->hasMany('App\USER','id','user_id');
   }
   public function cartProduct(){
     return $this->hasMany('App\PRODUCT', 'product_id', 'product_id');
   }

   public $timestamps = false; 
}
