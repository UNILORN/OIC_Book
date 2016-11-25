<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MypageController extends Controller
{
    public function index(){
      if(Auth::check()){
        $user = Auth::user();
        return view('mypage',compact('user'));
      }
      else{
        return redirect('/login');
      }
    }
}
