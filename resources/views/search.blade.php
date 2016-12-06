@extends('template')
@section('title','search')
@section('css','search')


@section('main')
<div id="main" style="position: relative;">
        <div class="search_body">
          <div class="search_side02">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li style="color:red">いずれかの値が間違っています。</li>
                @endforeach
              </ul>
            </div>
            @endif
              <div id="sidebar">
                  <div class="keyword-section" style="margin-top: 0px !important;">
                      <div class="category-section">
                        <div class="title">ジャンルから絞り込む</div>
                        <form action="/search" method="GET">
                           <ul>
                            <li class="love-category">
                            <input type="radio" name="cotegory" value="1">恋愛</li>
                          <li class="politics-category">
                              <input type="radio" name="cotegory" value="2">政治</li>
                              <li class="adlut-category">
                          <input type="radio" name="cotegory" value="3">アダルト</li>
                          </ul>

                          </div>
                          <div class="price-section">
                          <div class="title">価格帯から絞り込む</div>
                             <ul class="local-nav">
                              <li class="price-range">
                                価格下限<input type="text" name="price_sort_from" class="form-control"  value="{{array_get($request,'price_sort_from','') }}"><br>
                                価格上限<input type="text" name="price_sort_to"   class="form-control"  value="{{array_get($request,'price_soro_to','') }}">
                              </li>

                              <div class="title">並び替え</div>
                              <div class="sort">
                              <p>
                                <ul>
                                     <!-- <li><input type="radio" name="sort" value="auther_name">作者順（あ〜Z）</li> -->
                                     <li><input type="radio" name="sort" value="product_name">商品名順（あ〜Z）</li>
                                     <li><input type="radio" name="sort" value="product_price">価格順</li>
                                </ul>
                                <div class="title">昇順・降順</div>
                                <ul>
                                     <li><input type="radio" name="sort_order" value="desc">降順</li>
                                     <li><input type="radio" name="sort_order" value="asc">昇順</li>
                                </ul>
                              </p>
                                      <input type="submit" name="submit" class="submit" value="検索">
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
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


            </div>
        </div>
    </div>
@endsection
