@extends('template')
@section('title','TOP')
@section('css','top')

@section('main')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" media="screen" title="no title" charset="utf-8">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" charset="utf-8"></script>
  <script charset="utf-8">
  wow = new WOW(
                  {
                  boxClass:     'wow',      // default
                  animateClass: 'animated', // default
                  offset:       0,          // default
                  mobile:       true,       // default
                  live:         true        // default
                }
                )
                wow.init();
  </script>

<div class="contents">
    <div class="topimg">
      <img src="/img/banner.png">
    </div>

    <div class="category">
      <h2 id="category_title">カテゴリ</h2>
      <div id="politics" class="wow fadeIn" data-wow-duration="2s">
        <h2>政治</h2>
        <div id="politics_img">
          <img src="/img/kiminonaha.jpg" alt="" />
        </div>
      </div>
      <div id="love" class="wow fadeIn" data-wow-duration="2s">
        <h2>恋愛</h2>
        <div id="love_img" >
          <img src="/img/kiminonaha.jpg" alt="" />
        </div>
      </div>
      <div id="adult" class="wow fadeIn" data-wow-duration="2s">
        <h2>アダルト</h2>
        <div id="adult_img">
          <img src="/img/kiminonaha.jpg" alt="" />
        </div>
      </div>
    </div>

    <div class="ranking" id="ranking">
      <h2>人気ランキング</h2>
      <div class="ranking-list">
        <ul>
        @foreach ($ranking_products as $key => $product)
          <li>
            <a href="/detail?product_id={{$product->product_id}}">
              <span class="rank rank{{$key+1}}">No.{{$key+1}}</span>
              <span><img class="ranking_img" src="{{$product->product_image}}" /></span>
              <span class="item-name">{{$product->product_name}}</span>
              <span class="price">&yen;{{$product->product_price}}</span>
            </a>
          </li>
        @endforeach
        </ul>
      </div>
    </div>


    <a href="search">→商品一覧へ</a>
</div>
@endsection
