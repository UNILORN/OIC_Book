<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Service;
use DB;

class BuyhistoryController extends Controller
{
  public function index(Request $request)
  {
    $mypage = new \App\Service\BuyhistoryService;
    $user = $request->user();
    $histories = $mypage->getHistory($user->id);
    
    return view('buyhistory',compact('histories','user'));
  }
  public function point(Request $request)
  {
    $mypage = new \App\Service\BuyhistoryService;
    $user = $request->user();
    $histories = $mypage->getHistory();

    return view('buyhistory_point',compact('user','histories'));
  }
}
