<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EMP_EDIT extends Model
{
    protected $table = 'EMP_EDIT';

    public function empEdittarget(){
      return $this->hasMany('App\EMPLOYEE','employee_id','employee_id');
    }
    public function empEditdo(){
      return $this->hasMany('App\EMPLOYEE','employee_id','employee_id');
    }
}
