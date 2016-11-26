<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\PRODUCT;

class AdminstockController extends BaseController
{
  public function index(Request $request){
      $products = PRODUCT::ID($request->input('product_id'))
      ->Name($request->input('product_name'))
      ->PriceFrom($request->input('product_price_from'))
      ->PriceTo($request->input('product_price_to'))
      ->paginate(20);
      return view('/administer/product/admin_stock',["products"=>$products,"request"=>$request]);
  }

  public function create()
  {
      //
  }

  public function store(Request $request)
  {
    return redirect('/admin/stock');
  }

  public function show($id)
  {
      //
  }

  public function edit($id)
  {
    $products = PRODUCT::find($id);
    return view('/administer/product/admin_edit',compact('products'));
  }

  public function update(Request $request, $id)
  {
      //
  }

  public function destroy($id)
  {
      //
  }
}
