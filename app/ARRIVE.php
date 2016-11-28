<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ORDER;

class ARRIVE extends Model
{
    protected $table = 'ARRIVE';
    protected $primaryKey = 'arrive_id';

    public function arriveOrder()
    {
        return $this->hasOne('App\ORDER', 'order_id', 'order_id');
    }

    public function arriveEmployee()
    {
        return $this->hasMany('App\EMPLOYEE', 'employee_id', 'employee_id');
    }


    public function scopeID($query, $arrive_id)
    {
        if (!empty($arrive_id)) {
            $query = $query->where('arrive_id', $arrive_id);
        }
        return $query;
    }

    public function scopeOrderID($query, $order_id)
    {
        if (!empty($order_id)) {
            $query = $query->where('order_id', $order_id);
        }
        return $query;
    }

    public function scopePlanFrom($query,$arrive_plan_from){
        if(!empty($arrive_plan_from)){

            $order = ORDER::ArriveDayFrom($arrive_plan_from)
                ->get();

            $order_array = [];
            foreach ($order as $value){
                $order_array[] = $value->order_id;
            }
            $query = $query->whereIn('order_id',$order_array);
        }
        return $query;
    }

    public function scopePlanTo($query,$arrive_plan_to){
        if(!empty($arrive_plan_to)){

            $order = ORDER::ArriveDayTo($arrive_plan_to)
                ->get();

            $order_array = [];
            foreach ($order as $value){
                $order_array[] = $value->order_id;
            }
            $query = $query->whereIn('order_id',$order_array);
        }
        return $query;
    }

    public function scopeDayTo($query,$arrive_day_to){
        if(!empty($arrive_day_to)){
            $query = $query->where('arrive_day','<=',$arrive_day_to);
        }
        return $query;
    }

    public function scopeDayFrom($query,$arrive_day_from){
        if(!empty($arrive_day_from)){
            $query = $query->where('arrive_day','>=',$arrive_day_from);
        }
        return $query;
    }


}
