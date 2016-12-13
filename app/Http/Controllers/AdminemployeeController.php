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
        $employee = EMPLOYEE::active()
            ->paginate(20);

        return view('/administer/employee/admin_employee', compact('employee', 'request'));
    }

    public function create()
    {
        return view('/administer/employee/admin_create');
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        $employee = EMPLOYEE::active()
            ->find($id);

        return view('/administer/employee/admin_detail',compact('employee','id'));
    }

    public function edit($id)
    {
        $employee = EMPLOYEE::active()
            ->find($id);

        return view('/administer/employee/admin_edit',compact('employee','id'));
    }

    public function update(Request $request)
    {

    }

    public function destroy(Request $request)
    {

    }
}

