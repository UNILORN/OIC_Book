<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\ARRIVE;
use App\ORDER;
use App\PRODUCT;

class AdminarriveController extends BaseController
{

    public function index(Request $request)
    {
        $arrive = ARRIVE::ID($request->input('arrive_id'))
            ->OrderID($request->input('order_id'))
            ->PlanFrom($request->input('arrive_plan_from'))
            ->PlanTo($request->input('arrive_plan_to'))
            ->DayFrom($request->input('arrive_day_from'))
            ->DayTo($request->input('arrive_day_to'))
            ->with('arriveOrder')
            ->with('arriveOrder.orderProduct')
            ->with('arriveEmployee')
            ->paginate(20);


        return view('/administer/arrive/admin_arrive', compact('arrive', 'request'));
    }

    public function create(Request $request)
    {
        $product = [];
        $order = [];
        return view('/administer/arrive/admin_create',compact('product','request','order'));

    }

    public function store(Request $request)
    {
        $date = Carbon::now();
        ARRIVE::insert([
            'order_id' => 1,
            'employee_id' => 1,
            'arrive_number' => 1,
            'arrive_day' => $date,
            'arrive_price' => 100
        ]);
        return redirect('/admin/arrive/create');
    }

    public function product_search(Request $request){
        $product = PRODUCT::Active()
            ->ID($request->input('product_id'))
            ->Name($request->input('product_name'))
            ->ISBN($request->input('ISBN'))
            ->get();

        $order = ORDER::ProductIDquery($product)
            ->with('orderVendor')
            ->with('orderProduct')
            ->get();

        return view('/administer/arrive/admin_create',compact('request','product','order'));
    }

}
