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
  public function index(){
      $products = PRODUCT::all();
      return view('/administer/product/admin_stock',compact('products'));
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
