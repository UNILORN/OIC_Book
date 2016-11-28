<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TopController extends Controller
{
  public function index(){
    $top = new \App\Service\TopService;
    $ranking_products = $top->getRanking();

    return view('top',compact('ranking_products'));
  }
}
