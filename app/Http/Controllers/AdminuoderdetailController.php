<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\UORDER_DETAIL;
use App\UORDER;

class AdminuoderdetailController extends BaseController
{
  public function index(){

      $sales = UORDER::where('uorder_payment','1')
      ->with('uorderUser')
      ->with('uorderDetail')
      ->with('uorderDetail.uorderProduct')
      ->get();

      return view('/administer/admin_uoderdetail',compact('sales'));
  }
}
