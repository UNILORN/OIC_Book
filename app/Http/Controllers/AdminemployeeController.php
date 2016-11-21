<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;

class AdminemployeeController extends BaseController
{
  public function index(){
    $employee = User::whereNotNull('employee_id')->get();
    return view('/administer/admin_employee',compact('employee'));
  }
}
