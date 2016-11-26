<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\ORDER;

class AdminorderController extends BaseController
{
  public function index(){
    $order = ORDER::with('orderEmployee')
      ->with('orderProduct')
      ->with('orderVendor')
      ->paginate(20);
    return view('/administer/admin_order',compact('order'));
  }
}
