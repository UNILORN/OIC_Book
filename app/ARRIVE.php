<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ARRIVE extends Model
{
    protected $table = 'ARRIVE';
    protected $primaryKey = 'arrive_id';

    public function arriveOrder(){
      return $this->hasOne('App\ORDER','order_id','order_id');
    }
    public function arriveEmployee(){
      return $this->hasMany('App\EMPLOYEE','employee_id','employee_id');
    }

}
