<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ARRIVE extends Model
{
    protected $table = 'ARRIVE';

    public function arriveOrder(){
         return $this->hasMany('App\ORDER','order_id','order_id');
    }
    public function arriveEmployee(){
    　　　return $this->hasMany('App\EMPLOYEE','employee_id','employee_id');
    }
//public function arriveKenpin(){
//  migrationがない
//}
}
