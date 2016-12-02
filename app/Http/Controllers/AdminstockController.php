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
    public function index(Request $request)
    {
      // $this->validate($request, [
      //     'product_id' => 'max:5',
      //     'product_name' => 'max:50',
      //     'product_price_from' => 'integer|max:10',
      //     'product_price_to' => 'integer|max:10'
      // ]);
        $products = PRODUCT::Active()
            ->ID($request->input('product_id'))
            ->Name($request->input('product_name'))
            ->PriceFrom($request->input('product_price_from'))
            ->PriceTo($request->input('product_price_to'))
            ->paginate(20);
        return view('/administer/product/admin_stock', ["products" => $products, "request" => $request]);
    }

    public function create()
    {
        return view('/administer/product/admin_create');
    }

    public function store(Request $request)
    {
        PRODUCT::insert([
            'product_name'          => $request->input('product_name'),
            'genre_id'              => 1,
            'product_image'         => "text",
            'product_price'         => $request->input('product_price'),
            'product_stock'         => $request->input('product_stock'),
            'ISBN'                  => $request->input('product_ISBN'),
            'trancelater_id'        => 1,
            'product_height'        => $request->input('product_height'),
            'product_width'         => $request->input('product_width'),
            'product_depth'         => $request->input('product_depth'),
            'product_page'          => $request->input('product_page'),
            'product_start_day'     => $request->input('product_start_day'),
            'product_explanation'   => $request->input('product_explanation'),
            'product_browse_number' => 1,
            'product_order_number'  => 1

        ]);

        return redirect('/admin/stock');
    }

    public function show($id)
    {

        $products = PRODUCT::find($id);
        return view('/administer/product/admin_detail', compact('products', 'id'));
    }

    public function edit($id)
    {
        $products = PRODUCT::find($id);
        return view('/administer/product/admin_edit', compact('products', 'id'));
    }

    public function update(Request $request, $id)
    {
        $products = PRODUCT::find($id);
        $products->product_name = $request->input('product_name');
        $products->product_price = $request->input('product_price');
        $products->product_stock = $request->input('product_stock');
        $products->product_height = $request->input('product_height');
        $products->product_width = $request->input('product_width');
        $products->product_depth = $request->input('product_depth');
        $products->product_page = $request->input('product_page');
        $products->product_start_day = $request->input('product_start_day');
        $products->product_explanation = $request->input('product_explanation');
        $products->save();

        return redirect("/admin/stock/$id");
    }

    public function destroy(Request $request,$id)
    {
        $products = PRODUCT::find($id);
        $products->delete_flg = 1;
        $products->save();
        return redirect('/admin/stock/');
    }
}
