<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\UORDER;
use DB;
use App\Http\Controllers\Controller;


class AdminpaymentController extends BaseController
{
    public function index(Request $request)
    {
        $user = User::Tel($request->input('user_phonenum'))->first();
        $payment = UORDER::ID($request->input('payment_id'))
            ->DayFrom($request->input('uorder_from'))
            ->DayTo($request->input('uorder_to'))
            ->with('uorderUser')
            ->UserManyUserID($user)
            ->orderBy('uorder_day', 'desc')
            ->paginate(20);

        return view('/administer/payment/admin_payment', compact('payment', 'request'));
    }

    public function submit(Request $request)
    {
        $payment = UORDER::find($request->input('id'));
        $payment->uorder_payment = 1;
        $payment->save();

        return redirect('/admin/payment');
    }

    public function cancel(Request $request)
    {
        $payment = UORDER::find($request->input('id'));
        $payment->uorder_payment = 0;
        $payment->save();

        return redirect('/admin/payment');

    }
}
