<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ORDER;

class AdminPhoneController extends Controller
{
    function index(){
        return view('administer.phone.index');
    }

    function readqr(){

        return view('administer.phone.readqr');
    }

    function selectqr(){

        $order = ORDER::all();

        return view('administer.phone.createqr', compact('order'));
    }

    function createqr(Request $request){

        $id = $request->product_id;
        $order_id = $request->order_id;
        $num = $request->num;

        return view('administer.phone.creatingqr', compact('id', 'order_id', 'num'));

    }
}
