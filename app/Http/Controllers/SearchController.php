<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PRODUCT;

class SearchController extends Controller
{
  public function index(Request $request)
  {
      $this->validate($request, [
          'cotegory' => 'max:15',
          'price' => 'max:10',
          'sort' => 'max:15',
          'sort_order' => 'max:10',
          'price_sort_from' => 'integer:max:10',
          'price_sort_to' => 'integer:max:10'
    ]);
    $search = new \App\Service\SearchService;

      $cotegory = $request->input('cotegory');
      $price    = $request->input('price');
      $sort     = $request->input('sort');
      $sort_order = $request->input('sort_order');
      $price_sort_from=$request->input('price_sort_from');
      $price_sort_to = $request->input('price_sort_to');

      $products = PRODUCT::Active()
      ->Sort($sort,$sort_order)
      ->Name($request->input('product_name'))
      ->Cotegory($cotegory)
      ->PriceSortFrom($price_sort_from)
      ->PriceSortTo($price_sort_to)
      ->get();

      //$products = $search->getsortauther($cotegory,$price,$sort,$sort_order,$price_sort_from,$price_sort_to);

      return view('search',compact('products','request'));
    }
}
