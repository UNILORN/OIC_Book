<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Session\Store;

class AdminauthController extends Controller
{
    public function index()
    {
        return view('administer.auth.login');
    }

    public function check(Request $request)
    {
        //admin/loginからのRequest
        $q = DB::table('EMPLOYEE')->where('employee_email',$request->email)->where('employee_password',$request->password)->first();

        //セッションに
        if(count($q) === 1){
            session()->put('employee',$q->employee_id);

            return redirect('/admin');
        }

        return redirect('/admin/login');

    }

    public function logout()
    {
        session()->put('employee',null);

        return redirect('/');
    }
}
