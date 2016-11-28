<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\ARRIVE;

class AdminarriveController extends BaseController
{
  public function index(Request $request){
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


    return view('/administer/arrive/admin_arrive',compact('arrive','request'));
  }
}
