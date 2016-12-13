<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\ORDER;
use Illuminate\Http\Request;

class AdminorderController extends BaseController
{
    public function index(Request $request)
    {
        $order = ORDER::where('remaining_amount','<>',0)
            ->ID($request->input('order_id'))
            ->Product($request->input('product_name'))
            ->Employee($request->input('employee_name'))
            ->OrderDayFrom($request->input('order_day_from'))
            ->OrderDayTo($request->input('order_day_to'))
            ->ArriveDayFrom($request->input('arrive_day_from'))
            ->ArriveDayTo($request->input('arrive_day_to'))
            ->with('orderEmployee')
            ->with('orderProduct')
            ->with('orderVendor')
            ->paginate(20);
        return view('/administer/order/admin_order', compact('order', 'request'));
    }
    public function create(){
      return view('/administer/order/admin_create');
    }
}
