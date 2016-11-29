<?php

namespace App\Service;

use \App\PRODUCT;

class SearchService{
  public function getsortauther($cotegory,$price,$sort,$sort_order,$price_sort_from,$price_sort_to){
    $products = PRODUCT::Active()
    ->Sort($sort,$sort_order)
    ->Cotegory($cotegory)
    ->PriceSortFrom($price_sort_from)
    ->PriceSortTo($price_sort_to)
    ->get();

    return $products;
  }
}
