<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UORDER extends Model
{
    protected $table = 'UORDER';
    protected $primaryKey = 'uorder_id';

    public function uorderUser(){
      return $this->hasOne('App\User','id','user_id');
    }

    public function uorderDetail(){
      return $this->hasOne('App\UORDER_DETAIL','uorder_id');
    }

}
