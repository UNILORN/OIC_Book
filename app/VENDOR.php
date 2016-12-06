<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VENDOR extends Model
{
    protected $table = 'VENDOR';
    protected $primaryKey = 'vendor_id';

    public function scopeID($query,$vendor_id){
        if (!empty($vendor_id)){
            $query = $query->where('vendor_id',$vendor_id);
        }
        return $query;
    }

    public function scopeName($query,$vendor_name){
        if (!empty($vendor_name)){
            $query = $query->where('vendor_name','like',"%$vendor_name%");
        }
        return $query;
    }

    public function scopeTel($query,$tel){
        if (!empty($tel)){
            $query = $query->where('vendor_phone_number','like',"%$tel%");
        }
        return $query;
    }

}
