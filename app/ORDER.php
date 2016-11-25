<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ORDER extends Model
{
    protected $table = 'ORDER';

    public function orderEmployee(){
      return $this->hasMany('App\EMPLOYEE','employee_id','employee_id');
    }
    public function orderProduct(){
      return $this->hasOne('App\PRODUCT', 'product_id', 'product_id');
    }
    public function orderVendor(){
      return $this->hasOne('App\VENDOR', 'vendor_id', 'vender_id');
    }
}
