<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\ARRIVE;

class AdminarriveController extends BaseController
{
  public function index(){
    $arrive = ARRIVE::with('arriveOrder')
    ->with('arriveOrder.orderProduct')
    ->with('arriveEmployee')
    ->get();

    $arrive = ARRIVE::all();
    return view('/administer/admin_arrive',compact('arrive'));
  }
}
