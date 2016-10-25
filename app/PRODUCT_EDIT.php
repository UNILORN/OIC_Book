<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PRODUCT_EDIT extends Model
{
    protected $table = 'PRODUCT_EDIT_TABLE';

    public function productEditemployee(){
      return $this->hasMany('App\EMPLOYEE','employee_id','employee_id');
    }
}
