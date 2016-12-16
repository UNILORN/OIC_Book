@extends('template')
@section('title','TOP')
@section('css','top')

@section('main')
<div class="contents">
    <div class="topimg">
      <img src="/img/banner.png">
    </div>

    <div class="category">
      <div id="specialty_container">
        <div id="specialty_products">
          @foreach ($specialties as $specialty)
            <a href="/detail?product_id={{$specialty->product_id}}">
              <img class="specialty_product" src="{{$specialty->product_image}}" alt="" />
            </a>
          @endforeach
        </div>
        <div id="specialty">
          <h2>専門書</h2>
        </div>
      </div>

      <div id="picturebook_container">
        <div id="picturebook">
          <h2>絵本</h2>
        </div>
        <div id="picturebook_products">
          @foreach ($picturebooks as $picturebook)
              <a href="/detail?product_id={{$picturebook->product_id}}">
                <img class="picturebook_product" src="{{$picturebook->product_image}}" alt="" />
              </a>
          @endforeach
        </div>
      </div>

      <div id="manga_container">
        <div id="manga_products">
          @foreach ($mangas as $manga)
            <a href="/detail?product_id={{$manga->product_id}}">
              <img class="manga_product" src="{{$manga->product_image}}" alt="" />
            </a>
          @endforeach
        </div>
        <div id="manga">
          <h2>漫画</h2>
        </div>
      </div>
      <div id="novel_container">
        <div id="novel">
          <h2>小説</h2>
        </div>
        <div id="novel_products">
          @foreach ($novels as $novel)
            <a href="/detail?product_id={{$novel->product_id}}">
              <img class="novel_product" src="{{$novel->product_image}}" alt="" />
            </a>
          @endforeach
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
