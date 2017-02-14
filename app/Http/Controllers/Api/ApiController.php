<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\PRODUCT;
use App\VENDOR;
use Mail;
use App\Mail\Mailsend;

class ApiController extends Controller
{

    public function auth(Request $request){

        $q = DB::table('EMPLOYEE')->where('employee_email',$request->email)->where('employee_password',sha1($request->password))->first();

        //okなら
        if(count($q) === 1){
            return response()->json(['id' => $q->employee_id]);
        }

        return response()->json(false);

    }

    public function mail(){
        $vendor = VENDOR::all();
        $product = PRODUCT::all();

        $ary = [];

        $ary['vendor'] = $vendor;
        $ary['product'] = $product;

        return response()->json($ary);
    }

    public function send_mail(Request $request){

    }

}
