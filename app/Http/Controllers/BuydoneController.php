<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\PRODUCT;
use App\CART;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\UserMailSend; // 追加




class BuydoneController extends Controller
{
    public function index(Request $request){
      $user = Auth::user();
      $cart = CART::where('user_id',$user->id)->get();
      $cartarray = [];

      foreach ($cart as $value) {
        $cartarray[] =  $value->product_id;
      }
      $timestamp = Carbon::now()->timestamp;
      $products = PRODUCT::whereIn('product_id',$cartarray)->get();
      $sum = new \App\Service\AuthcartService;
      $sum = $sum->getSum($user->id);

      $user_point = $user['original']['user_point'];

      $use_point = (int)$request->use_point;

      if($use_point > $user_point || $use_point <= -1) {
          return redirect('/');
      }

      $sum-=$use_point;

      $uorder = new \App\Service\BuydoneService;

      $point = $request->input('point');
      $point = floor( $sum/100 );
      $uorderadd = $uorder -> uorderadd($user,$sum,$timestamp,$point,$use_point);
      $uorderdetailadd = $uorder -> uorderdetailadd($cart,$timestamp);
      $stockupdata = $uorder -> stockupdate($cart);
      $pointadd = $uorder -> pointadd($user,$point);
      $pointsub = $uorder -> pointsub($user,$use_point);
      $cartdel = new \App\Service\AuthcartService;
      $cartdel -> deleteAllItem($user->id,$cartarray);

      $send_to_email = Auth::user()['attributes']['email'];

      Mail::to($send_to_email)->send(new \App\Mail\UserMailsend($products));

      return view('buydone');
    }
}
