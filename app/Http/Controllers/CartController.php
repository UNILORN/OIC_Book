<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CartController extends Controller
{
  public function index(){
    return view('cart');
  }
  public function show(Request $request){
    $id = $request->get("id");
    $id = DB::table('users')->insertGetId(
    ['product_id' => '$id' ]
    );
    return redirect("/cart");
  }

  public function delete(Request $request){
    $id = $request->get("id");
    $product = DB::table('CART')->where('id',$id)->first();
    $product = DB::table('CART')->where('id',$id)->delete();
    return redirect("/cart");
  }
}
