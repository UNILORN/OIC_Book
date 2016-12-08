<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PRODUCT;
use App\EMPLOYEE;
use App\User;

class ORDER extends Model
{
    protected $table = 'ORDER';

    public function orderEmployee()
    {
        return $this->hasOne('App\EMPLOYEE', 'employee_id', 'employee_id');
    }

    public function orderProduct()
    {
        return $this->hasOne('App\PRODUCT', 'product_id', 'product_id');
    }

    public function orderVendor()
    {
        return $this->hasOne('App\VENDOR', 'vendor_id', 'vender_id');
    }

    public function scopeID($query, $order_id)
    {
        if (!empty($order_id)) {
            $query = $query->where('order_id', $order_id);
        }
        return $query;
    }

    public function scopeProduct($query, $product_name)
    {
        if (!empty($product_name)) {
            $product_id = PRODUCT::Name($product_name)
                ->get();
            $product_array = [];

            foreach ($product_id as $value) {
                $product_array[] = $value->product_id;
            }
            $query = $query->whereIn('product_id', $product_array);
        }
        return $query;
    }

    public function scopeProductIDquery($query, $product_id)
    {
        if (!empty($product_id)) {
            $product_array = [];

            foreach ($product_id as $value) {
                $product_array[] = $value->product_id;
            }
            $query = $query->whereIn('product_id', $product_array);
        }
        return $query;
    }

    public function scopeEmployee($query, $employee_name)
    {
        if (!empty($employee_name)) {
            $user_id = User::Name($employee_name)
                ->get();
            $user_array = [];
            foreach ($user_id as $value) {
                $user_array[] = $value->employee_id;
            }
            $query = $query->whereIn('employee_id', $user_array);
        }
        return $query;
    }

    public function scopeOrderDayFrom($query, $order_day_from)
    {
        if (!empty($order_day_from)) {
            $query = $query->where('order_day', '>=', $order_day_from);
        }
        return $query;
    }

    public function scopeOrderDayTo($query, $order_day_to)
    {
        if (!empty($order_day_to)) {
            $query = $query->where('order_day', '<=', $order_day_to);
        }
        return $query;
    }

    public function scopeArriveDayFrom($query, $arrive_day_from)
    {
        if (!empty($arrive_day_from)) {
            $query = $query->where('arrive_plan', '>=', $arrive_day_from);
        }
        return $query;
    }

    public function scopeArriveDayTo($query, $arrive_day_to)
    {
        if (!empty($arrive_day_to)) {
            $query = $query->where('arrive_plan', '<=', $arrive_day_to);
        }
        return $query;
    }


}
