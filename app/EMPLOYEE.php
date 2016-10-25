<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EMPLOYEE extends Model
{
    protected $table = 'EMPLOYEE_TABLE';

    public function auth(){
      return $this->hasMany('App\AUTH','auth_id','auth_id');
    }
}
