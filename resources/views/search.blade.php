@extends('template')
@section('title','recede')


@section('main')
<div id="main" style="position: relative;">
        <div class="search_body">
                <div class="search_side01">
                    <div class="itemlist">
                        <ul>
                          @foreach($products as $product)
                            <li class="date-path">
                                <span class="image">
                                  <a href="detail?product_id={{$product->product_id}}"><img src="{{$product->product_image}}" 	height="160px" width="160px"></a>
                                </span>
                                <span class="item-name">{{$product->product_name}}</span>
                                <span class="search_price">¥{{$product->product_price}}</span>
                            </li>
                          @endforeach
                        </ul>
                    </div>
                </div>
                <div class="search_side02">
                    <div id="sidebar">
                        <div class="keyword-section" style="margin-top: 0px !important;">
                            <div class="category-section">
                              <div class="title">ジャンルから絞り込む</div>
                              <form action="cgi-bin/abc.cgi" method="post">
                                 <ul>
                                  <li class="love-category">
                                  <input type="checkbox" name="cotegory" value="1">恋愛</li>
                                <li class="politics-category">
                                    <input type="checkbox" name="cotegory" value="2">政治</li>
                                    <li class="adlut-category">
                                <input type="checkbox" name="cotegory" value="3">アダルト</li>
                                </ul>
                                </form>
                                </div>
                                <div class="price-section">
                                <div class="title">価格帯から絞り込む</div>
                                <form action="cgi-bin/abc.cgi" method="post">
                                   <ul class="local-nav">
                                    <li class="price-range">
                                    <input type="checkbox" name="price" value="1">指定なし
                                    </li>
                                    <li class="price-range">
                                        <input type="checkbox" name="price" value="2">~500円
                                    </li>
                                    <li class="price-range">
                                        <input type="checkbox" name="price" value="3">500~1000円
                                    </li>
                                    <li class="price-range">
                                        <input type="checkbox" name="price" value="4">1000~1500円
                                    </li>
                                    <li class="price-range">
                                        <input type="checkbox" name="price" value="5">1500~2000円
                                    </li>
                                    <li class="price-range">
                                        <input type="checkbox" name="price" value="6">2000~2500円
                                    </li>
                                    <li class="price-range">
                                        <input type="checkbox" name="price" value="7">2500~3000円
                                    </li>
                                    <li class="price-range">
                                        <input type="checkbox" name="price" value="8">3000~3500円
                                    </li>
                                    <li class="price-range">
                                        <input type="checkbox" name="price" value="9">3500~4000円
                                    </li>
                                    <li class="price-range">
                                        <input type="checkbox" name="price" value="10">4000~4500円
                                    </li>
                                    <li class="price-range">
                                        <input type="checkbox" name="price" value="11">4500~5000円
                                    </li>
                                    <li class="price-range">
                                        <input type="checkbox" name="price" value="12">5000円~
                                    </li>
                                    </ul>
                                    </form>
                                    <div class="title">並び替え</div>
                                    <div class="sort">
                                    <form action="#" method="post">
                                    <p>
                                       <ul>
                                           <li><input type="checkbox" name="sort" value="1">作者順（あ〜Z）</li>
                                           <li><input type="checkbox" name="sort" value="2">商品名順（あ〜Z）</li>
                                           <li><input type="checkbox" name="sort" value="3">価格順</li>
                                    </p>
                                            <input type="submit" name="submit" class="submit" value="検索">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
