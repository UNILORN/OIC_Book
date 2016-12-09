<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\UORDER_DETAIL;
use App\UORDER;
use App\User;

class AdminuoderdetailController extends BaseController
{
  public function index(Request $request){

      $user = User::Name($request->input('uorder_name'))->get();

      $sales = UORDER::where('uorder_payment','1')
      ->ID($request->input('uorder_id'))
      ->DayFrom($request->input('uorder_day_from'))
      ->DayTo($request->input('uorder_day_to'))
      ->ManyUserID($user)
      ->with('uorderUser')
      ->with('uorderDetail')
      ->with('uorderDetail.uorderProduct')
      ->orderBy('uorder_day','desc')
      ->paginate(20);

      return view('/administer/uorderdetail/admin_uoderdetail',compact('sales','request'));
  }
}
