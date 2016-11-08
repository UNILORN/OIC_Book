<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PRODUCT;

class ProductpageController extends Controller
{
    public function index(){
      return view('Productpage');
    }
    public function all(){
      $product = DB::table('product')->get();
      foreach ($users as $user)
      {
    var_dump($user->name);
      }
    }

}
