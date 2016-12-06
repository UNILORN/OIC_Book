<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UORDER extends Model
{
    protected $table = 'UORDER';
    protected $primaryKey = 'uorder_id';

    public function uorderUser()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function uorderDetail()
    {
        return $this->hasOne('App\UORDER_DETAIL', 'uorder_id');
    }

    public function scopeID($query, $id)
    {
        if (!empty($id)) {
            $query = $query->where('uorder_id', $id);
        }
        return $query;
    }

    public function scopeDayFrom($query, $dayfrom)
    {
        if (!empty($dayfrom)) {
            $query = $query->where('uorder_day', '>=', $dayfrom);
        }
        return $query;
    }

    public function scopeDayTo($query, $dayto)
    {
        if (!empty($dayto)) {
            $query = $query->where('uorder_day', '<=', $dayto);
        }
        return $query;
    }

    public function scopeManyUserID($query, $userid)
    {
        if (!empty($userid)) {
            foreach ($userid as $value) {
                $array[] = $value->id;
            }
            $query = $query->whereIn('user_id', $array);
        }
        return $query;
    }

}
