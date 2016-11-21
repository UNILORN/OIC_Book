<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EMPLOYEE extends Model
{
    protected $table = 'EMPLOYEE';

    public function auth(){
      return $this->hasMany('App\AUTH','auth_id','employee_auth_id');
    }

}
