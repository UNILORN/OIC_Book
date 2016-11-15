<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\UORDER_DETAIL;

class AdminuoderdetailController extends BaseController
{
  public function index(){

      $sales = UORDER_DETAIL::with('uorderDetail')
      ->with('uorderProduct')
      ->get();

      return view('/administer/admin_uoderdetail',compact('sales'));
  }
}
