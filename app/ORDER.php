<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ORDER extends Model
{
    protected $table = 'ORDER_TABLE';

    public function orderEmployee(){
      return $this->hasMany('App\EMPLOYEE','employee_id','employee_id');
    }
    public function orderProduct(){
      return $this->hasMany('App\PRODUCT', 'product_id', 'product_id');
    }
    public function orderVendor(){
      return $this->hasMany('App\VENDOR', 'vendor_id', 'vendor_id');

    }
}
