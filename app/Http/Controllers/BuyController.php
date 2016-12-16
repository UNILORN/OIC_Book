<?php

namespace App\Http\Controllers;


use App\UORDER;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Service\AuthcartService;

class BuyController extends Controller
{
    public function index()
    {


        if (Auth::check()) {
            $cart = new AuthcartService;
            if(!empty($cart->getItems(Auth::id())->toArray())){
                return view('buy');
            }
            return redirect('/');
        } else {
            return view('auth/login');
        }
    }
}
