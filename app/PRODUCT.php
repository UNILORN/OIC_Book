<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PRODUCT extends Model
{
    protected $table = 'PRODUCT';
    protected $primaryKey = 'product_id';

    public function productGenre(){
      return $this->hasOne('App\GENRE','genre_id','genre_id');
    }
    public function productTrancelater(){
      return $this->hasMany('App\TRANCELATER','trancelater_id','trancelater_id');
    }

    public function scopeActive($query){
        return $query->where('delete_flg',0);
    }

    public function scopeID($query,$product_id){
      if(!empty($product_id)){
        $query = $query->where('product_id',$product_id);
      }
      return $query;
    }

    public function scopeName($query,$product_name){
      if(!empty($product_name)){
        $query = $query->where('product_name','like',"%$product_name%");
      }
      return $query;
    }

    public function scopePriceFrom($query,$product_price_from){
      if(!empty($product_price_from)){
        $query = $query->where('product_price','>=',$product_price_from);
      }
      return $query;
    }
    public function scopePriceTo($query,$product_price_to){
      if(!empty($product_price_to)){
        $query = $query->where('product_price','<=',$product_price_to);
      }
      return $query;
    }
}
