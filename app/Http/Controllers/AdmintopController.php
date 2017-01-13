<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\PRODUCT;
use App\UORDER;
use App\GENRE;
use App\REVIEW;
use App\ChromePhp;

class AdmintopController extends BaseController
{
    public function index()
    {
        return view('/administer/admin_top');
    }

    //
    // ジャンル別売上推移
    //
    public function genre_sales()
    {


         $uorder = UORDER::with('uorderDetail')
            ->with('uorderDetail.uorderProduct')
            ->get();

        $genre  = GENRE::all();
        $genre_sales = [];

        ChromePhp::log($genre);

         /*
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

         */
    }

    //
    // 月間売上API
    //
    public function monthly_sales(){

        $uorder = UORDER::select(DB::raw("DATE_FORMAT(`uorder_day`,'%Y-%m') as uorder_day"),'uorder_id')
            ->where('uorder_day','like',Carbon::now()->year.'%')
            ->with('uorderDetail')
            ->with('uorderDetail.uorderProduct')
            ->orderBy('uorder_day')
            ->get();

        $uorder_day = UORDER::select(DB::raw("distinct DATE_FORMAT(`uorder_day`,'%Y-%m') as uorder_day"))
            ->groupBy('uorder_day')
            ->get();

        $monthly_sales = [];
        foreach ($uorder_day as $key => $value){
            $monthly_sales[$key] = 0;
        }

        foreach ($uorder as $value) {
            foreach ($uorder_day as $key => $month){
                if($month->uorder_day == $value->uorder_day){
                    foreach($value->uorderDetail as $detailvalue){
                        $monthly_sales[$key] += intval($detailvalue->uorderProduct->product_price) * intval($detailvalue->uorder_number);
                    }
                }
            }
        }

        return response()->json($monthly_sales);
    }


    //
    // レビューが高い商品
    //
    public function product_review(){
        return response()->json();
    }

    //
    // 売上が高い本ランキング
    //
    public function product_ranking(){
        return response()->json();
    }

    //
    //
    //
    //
    //
    //

}
