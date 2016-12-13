<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class EMPLOYEE extends Model
{
    protected $table = 'EMPLOYEE';
    protected $primaryKey = 'employee_id';

    public function auth(){
      return $this->hasMany('App\AUTH','auth_id','employee_auth_id');
    }

    public function user(){
        return $this->belongsTo('App\User','employee_id');
    }


    public function scopeactive($query){
        $query = $query->where('delete_flg',0);
        return $query;
    }

}
