<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;

class AdminemployeeController extends BaseController
{
  public function index(Request $request){
    $employee = User::whereNotNull('employee_id')
    ->EmployeeID($request->input('employee_id'))
    ->Name($request->input('employee_name'))
    ->paginate(20);
    return view('/administer/admin_employee',compact('employee','request'));
  }
}
