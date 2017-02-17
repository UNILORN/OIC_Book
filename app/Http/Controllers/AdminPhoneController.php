<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ORDER;
use App\PRODUCT;
use DB;
use App\ARRIVE;
use Carbon\Carbon;

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
        $price = $request->price;

        return view('administer.phone.creatingqr', compact('id', 'order_id', 'num', 'price'));

    }

    function conf(Request $request){

        $id = $request->product_id;
        $order_id = $request->order_id;
        $num = $request->num;
        $price = $request->price;

        $order = DB::table('ORDER')->where('order_id',$order_id)->first();
        $product = DB::table('PRODUCT')->where('product_id', $id)->first();

        return view('administer.phone.conf', compact('order', 'product', 'num', 'price'));

    }

    function done(Request $request){
        $id = $request->product_id;
        $order_id = $request->order_id;
        $num = $request->num;
        $price = $request->price;

        $date = Carbon::now();
        $order = ORDER::find($request->input('order_id'));
        if ($order->remaining_amount >= $request->input('num')) {
            $order->remaining_amount = $order->remaining_amount - $request->input('num');
            $order->save();
        }
        else{
            return 'ダメです';
        }

        ARRIVE::insert([
            'order_id' => $request->input('order_id'),
            'employee_id' => session()->get('employee'),
            'arrive_number' => $request->input('num'),
            'arrive_day' => $date,
            'arrive_price' => $request->input('price')
        ]);

        $product = PRODUCT::find($order->product_id);
        $product->product_stock = $product->product_stock + $request->input('num');
        $product->save();

        return view('administer.phone.done');

    }
}
