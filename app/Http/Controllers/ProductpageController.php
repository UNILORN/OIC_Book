<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PRODUCT;

class ProductpageController extends Controller
{
    public function index(){
      $details=PRODUCT::where('product_id',1)->first();
        return response()->json($details);
    }

}
