<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PRODUCT extends Model
{
    protected $table = 'PRODUCT';

    public function productGenre(){
      return $this->hasMany('App\GENRE','genre_id','genre_id');
    }
    public function productTrancelater(){
      return $this->hasMany('App\TRANCELATER','trancelater_id','trancelater_id');
    }
}
