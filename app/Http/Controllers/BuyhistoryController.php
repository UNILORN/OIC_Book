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
    $histories = $mypage->getHistory();
    $user = $request->user();



    return view('buyhistory',compact('histories','user'));
  }
}
