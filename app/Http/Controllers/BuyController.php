<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class BuyController extends Controller
{
  public function index(){

    if (Auth::check()) {
      return view('buy');
    }else{
      return view('auth/login');
    }
    }
}
