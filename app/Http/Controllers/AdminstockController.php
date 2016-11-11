<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\PRODUCT;

class AdminstockController extends BaseController
{
  public function index(){
      $products = PRODUCT::all();
      return view('/administer/admin_stock',compact('products'));
  }
}
