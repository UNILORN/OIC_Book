<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PRODUCT extends Model
{
    protected $table = 'PRODUCT';
    protected $primaryKey = 'product_id';

    public function productGenre(){
      return $this->hasMany('App\GENRE','genre_id','genre_id');
    }
    public function productTrancelater(){
      return $this->hasMany('App\TRANCELATER','trancelater_id','trancelater_id');
    }
    public function scopeID($query,$product_id){

      if(!empty($product_id)){
        $query = $query->where('product_id',$product_id);
      }
      return $query;
    }
}
