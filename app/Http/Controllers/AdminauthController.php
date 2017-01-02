<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Session\Store;

class AdminauthController extends Controller
{
    public function index()
    {
        if(session()->get('employee', null) === null){
            return view('administer.auth.login');
        }
        return redirect('/admin');
    }

    public function check(Request $request)
    {
        //admin/loginからのRequest
        $q = DB::table('EMPLOYEE')->where('employee_email',$request->email)->where('employee_password',sha1($request->password))->first();

        //セッションに
        if(count($q) === 1){
            session()->put('employee',$q->employee_id);

            session()->put('authority',$q->employee_authority);

            return redirect('/admin');
        }

        return redirect('/admin/login');

    }

    public function logout()
    {
        session()->put('employee',null);

        session()->put('authority',null);

        return redirect('/');
    }
}
