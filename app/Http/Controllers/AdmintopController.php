<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\PRODUCT;
use App\UORDER;
use App\GENRE;
use App\REVIEW;

class AdmintopController extends BaseController
{
    public function index()
    {
        return view('/administer/admin_top');
    }

    public function genre_sales()
    {
        $uorder = UORDER::with('uorderDetail')
            ->with('uorderDetail.uorderProduct')
            ->get();

        $genre  = GENRE::all();
        $genre_sales = [];

//        ジャンルの数だけ初期化
        foreach ($genre as $key => $value){
            $genre_sales[$value->category] = [];
            $genre_sales[$value->category]["price"] = 0;
            $genre_sales[$value->category]["num"] = 0;
        }

        foreach ($uorder as $u_value){
            foreach ($u_value->uorderDetail as $value){
                $genre_name = GENRE::find($value->uorderProduct->genre_id);
                $genre_sales[$genre_name->category]["price"] += intval($value->uorderProduct->product_price) * intval($value->uorder_number);
                $genre_sales[$genre_name->category]["num"] += 1;
            }

        }
        return response()->json($genre_sales);
    }

    public function product_review(){

    }
}
