<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\PRODUCT;
use Image;

class AdminstockController extends BaseController
{
    public function index(Request $request)
    {
        $products = PRODUCT::Active()
            ->ID($request->input('product_id'))
            ->Name($request->input('product_name'))
            ->PriceFrom($request->input('product_price_from'))
            ->PriceTo($request->input('product_price_to'))
            ->paginate(20);

        $progress = [
            50 => "progress-bar-success",
            20 => "progress-bar-warning",
            0  => "progress-bar-danger"
        ];

        $maxstock = 0;
        foreach($products as $value){
            if($maxstock < $value->product_stock){
                $maxstock = $value->product_stock;
            }
        }

        return view('/administer/product/admin_stock', compact('request','products','maxstock','progress'));
    }

    public function create()
    {
        $vendor = [];
        return view('/administer/product/admin_create',compact('vendor'));
    }

    public function store(Request $request)
    {

        $image = $request->product_image;

        //一意の画像の名前をつける
        $fileName = sha1(uniqid(rand(), true));

        $path = Image::make($image->getRealPath());

        $genre = null;


        //ジャンルによって保存先を変更する
        switch ($request->product_genre){
            case '1' :
                $genre = 'novel/';
                break;
            case '2' :
                $genre = 'comic/';
                break;
            case '3' :
                $genre = 'technical/';
                break;
            case '4' :
                $genre = 'picture_book/';
                break;
        }

        //画像自体の保存
        $path->save(public_path() . '/img/book_img/' . $genre . $fileName . '.jpg');


        PRODUCT::insert([
            'product_name'          => $request->input('product_name'),
            'genre_id'              => $request->input('product_genre'),
            //画像のpathを保存
            'product_image'         => '/img/book_img/' . $genre . $fileName . '.jpg',
            'product_price'         => $request->input('product_price'),
            'product_stock'         => $request->input('product_stock'),
            'ISBN'                  => $request->input('ISBN'),
            'auther_name'           => $request->input('product_authername'),
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
        $result = 0;
        if($request->image === null) {
            $image = $request->product_image;

            //一意の画像の名前をつける
            $fileName = sha1(uniqid(rand(), true));

            $path = Image::make($image->getRealPath());

            $genre = null;


            //ジャンルによって保存先を変更する
            switch ($request->product_genre) {
                case '1' :
                    $genre = 'novel/';
                    break;
                case '2' :
                    $genre = 'comic/';
                    break;
                case '3' :
                    $genre = 'technical/';
                    break;
                case '4' :
                    $genre = 'picture_book/';
                    break;
            }

            //画像自体の保存
            $path->save(public_path() . '/img/book_img/' . $genre . $fileName . '.jpg');

            $result = 1;
        }

        $products = PRODUCT::find($id);
        $products->product_name = $request->input('product_name');
        $products->genre_id = $request->input('product_genre');
        $products->auther_name = $request->input('product_authername');
        $products->product_price = $request->input('product_price');
        $products->ISBN = $request->input('ISBN');
        $products->product_stock = $request->input('product_stock');
        $products->product_height = $request->input('product_height');
        $products->product_width = $request->input('product_width');
        $products->product_depth = $request->input('product_depth');
        $products->product_page = $request->input('product_page');
        $products->product_start_day = $request->input('product_start_day');
        $products->product_explanation = $request->input('product_explanation');
        if($result === 1){
            $products->product_image = '/img/book_img/' . $genre . $fileName . '.jpg';
        }
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
