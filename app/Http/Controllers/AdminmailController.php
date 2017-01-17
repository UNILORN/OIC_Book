<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Contracts\Http;
use App\ORDER;
use App\PRODUCT;
use App\VENDOR;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Mail; // 追加
use App\Mail\Mailsend; // 追加

class AdminmailController extends BaseController
{

    public function index()
    {
        $vendor = VENDOR::all();
        $product = PRODUCT::all();
        return view('administer/mail/admin_mail',compact('vendor','product'));
    }

    public function detail(Request $request){

        $vendor  = VENDOR::where('vendor_id',$request->input('vendor'))->first();
        $title   = $request->input('title');
        $product = PRODUCT::where('product_id',$request->input('product'))->first();
        $num     = $request->input('num');
        $date    = $request->input('date');

        return view('administer/mail/admin_maildetail',compact('vendor','title','product','num','date'));

    }

    public function send(Request $request)
    {
        $timestamp = Carbon::now()->timestamp;
        $today = Carbon::now();
        ORDER::insert([
            'order_id'=>$timestamp,
            'vender_id'=>$request->input('vendor_id'),
            'employee_id'=>session()->get('employee'),
            'product_id'=>$request->input('product_id'),
            'order_number'=>$request->input('num'),
            'order_day'=>$today,
            'arrive_plan'=>$request->input('date'),
            'remaining_amount'=>$request->input('num'),
            'order_flug'=>0
        ]);



        Mail::to($request->email)->send(new Mailsend($request));

        return view('administer.mail.admin_mailsend');
    }

}