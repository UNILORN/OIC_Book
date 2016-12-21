<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;
use App\EMPLOYEE;

class AdminemployeeController extends BaseController
{
    public function index(Request $request)
    {
            $employee = EMPLOYEE::Active()
            ->ID($request->input('employee_id'))
            ->Name($request->input('employee_name'))
            ->Tel($request->input('employee_phone_number'))
            ->Email($request->input('employee_email'))
            ->paginate(20);

        return view('/administer/employee/admin_employee', compact('employee', 'request'));
    }

    public function create()
    {
        return view('/administer/employee/admin_create');
    }

    public function store(Request $request)
    {
        EMPLOYEE::insert([
            'employee_name'         => $request->input('employee_name'),
            'employee_email'        => $request->input('employee_email'),
            'employee_phone_number' => $request->input('employee_phone_number'),
            'employee_password'     => sha1($request->input('employee_pass'))
        ]);

        return redirect('/admin/employee');
    }

    public function show($id)
    {
        $employee = EMPLOYEE::active()
            ->find($id);

        return view('/administer/employee/admin_detail', compact('employee', 'id'));
    }

    public function edit($id)
    {
        $employee = EMPLOYEE::active()
            ->find($id);

        return view('/administer/employee/admin_edit', compact('employee', 'id'));
    }

    public function update(Request $request,$id)
    {
      $employee = EMPLOYEE::find($id);
      $employee->employee_name = $request->input('employee_name');
      $employee->employee_email = $request->input('employee_email');
      $employee->employee_phone_number = $request->input('employee_phone_number');
      $employee->save();

      return redirect('/admin/employee');
    }

    public function destroy(Request $request,$id)
    {
      $employee = EMPLOYEE::find($id);
      $employee->delete_flg = 1;
      $employee->save();
      return redirect('/admin/employee/');
    }
}
