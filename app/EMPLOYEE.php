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

    public function scopeID($query, $id)
    {
        if (!isset($id)) {
            $query = $query->where('employee_id', $id);
        }
        return $query;
    }

    public function scopeName($query, $name)
    {
        if (!isset($name)) {
            $query = $query->where('employee_name','like', "%$name%");
        }
        return $query;
    }

    public function scopeEmail($query, $email)
    {
        if (!isset($email)) {
            $query = $query->where('employee_email','like', "%$email%");
        }
        return $query;
    }


}
