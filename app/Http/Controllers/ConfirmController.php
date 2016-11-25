<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class ConfirmController extends Controller
{
  public function index(){
    return view('confirm');
  }
  public function signup(){

  }
  public function buy(Request $request){

    if($request->input('buy') == 1){
      $buy=('銀行振込');
    }
    elseif($request->input('buy')==null){
      $buy=('選択されていません');
    }
    
    $user = Auth::user();
    return view('buy_confirm',compact('buy','user'));
  }
  public function recede(){

  }
}
