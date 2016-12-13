<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class TopController extends Controller
{
  public function index(Request $request){
    /****
    *   ログイン時のsession情報の引き継ぎ
    ****/
    if (Auth::check()) {
      if (!empty(session()->get("cart",[])))
      {
        $products = session()->get("cart",[]);
        $user = $request->user();
        $cart = new \App\Service\AuthcartService;
        $cart->sessionTakeover($user->id,$products);
      }
    }

    $top = new \App\Service\TopService;
    $genre = new \App\Service\GenreService;
    $ranking_products = $top->getRanking();
    $novels = $genre->getNovels();
    $mangas = $genre->getMangas();
    $picturebooks = $genre->getPicturebooks();
    $specialties = $genre->getSpecialties();

    return view('top',compact('ranking_products','novels','mangas','picturebooks','specialties'));
  }
}
