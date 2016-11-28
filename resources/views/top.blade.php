@extends('template')
@section('title','top')
@section('css','top')

@section('main')
<div class="contents">
    <div class="topimg">
      <img src="/img/banner.png">
    </div>
    <div class="ranking" id="ranking">
      <h2>人気ランキング</h2>
      <div class="ranking-list">
        <ul>
        @foreach ($ranking_products as $key => $product)
          <li>
            <a href="/detail?product_id={{$product->product_id}}">
              <span class="rank rank{{$key+1}}">No.{{$key+1}}</span>
              <span><img src="{{$product->product_image}}" /></span>
              <span class="item-name">{{$product->product_name}}</span>
              <span class="price">&yen;{{$product->product_price}}</span>
            </a>
          </li>
        @endforeach
        </ul>
      </div>
    </div>
</div>
@endsection
