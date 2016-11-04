<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class USER extends Model
{
    protected $table = 'USER';

    public userEmployee(){
      return $this->hasMany('App\EMPLOYEE','employee_id','employee_id');
    }
}
