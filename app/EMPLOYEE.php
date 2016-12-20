<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class EMPLOYEE extends Model
{
    protected $table = 'EMPLOYEE';
    protected $primaryKey = 'employee_id';

    public function scopeactive($query)
    {
        $query = $query->where('delete_flg', 0);
        return $query;
    }

    public function scopeID($query, $employee_id)
    {
        if (!empty($employee_id)) {
            $query = $query->where('employee_id', $employee_id);
        }
        return $query;
    }

    public function scopeName($query, $employee_name)
    {
        if (!empty($employee_name)) {
            $query = $query->where('employee_name','like', "%$employee_name%");
        }
        return $query;
    }

    public function scopeEmail($query, $employee_email)
    {
        if (!empty($employee_email)) {
            $query = $query->where('employee_email','like', "%$employee_email%");
        }
        return $query;
    }
    public function scopeTel($query,$employee_phone_number){
      if(!empty($employee_phone_number)){
        $query = $query->where('employee_phone_number','like',"%$employee_phone_number%");
      }
      return $query;
    }


}
