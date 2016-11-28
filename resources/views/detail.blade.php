@extends('template')
@section('title','detail')
@section('css','detail')

@section('main')

  <div class="product_content">
    <div class="product_img"><img src="{{$product->product_image}}"></div>
      <div class="product_text">
          <h1 class="product_title">{{$product->product_name}}</h1>
          <p>{{$product->productGenre["category"]}}</p>
          <p class="price">￥{{$product->product_price}}</p>

          @if(Auth::check())
            <div class="cart-form">
                <form action="/addauthcart" method="post">
                    <div class="cart-num">
                        <select name="number" class="form-select hasCustomSelect">
                          @foreach (range(1,$product->product_stock) as $key => $value)
                            <option value="{{$value}}">{{$value}}</option>
                          @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="product_id" value="{{$product->product_id}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="cart-submit">
                      <input type="submit" value="カートに入れる">
                    </div>
                </form>
            </div>
          @else
            <div class="cart-form">
                <form action="/addsessioncart" method="post">
                    <div class="cart-num">
                        <select name="number" class="form-select hasCustomSelect">
                          @foreach (range(1,$product->product_stock) as $key => $value)
                            <option value="{{$value}}">{{$value}}</option>
                          @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="product_id" value="{{$product->product_id}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="cart-submit">
                      <input type="submit" value="カートに入れる">
                    </div>
                </form>
            </div>
          @endif
          <p><b>アイテム説明</b></p>
          <p>{{$product->product_explanation}}</p>
      </div>
  </div>


<div class="review_background_color">
  <div class="review">
    <div class="customer_review"><h1>カスタマーレビュー</h1></div>
    @foreach ($reviews as $review)
    <div class="reviewer">投稿者：{{$review->reviewUsers[0]->name}}</div>
    <div class="posted_date">{{$review->entry_time}}</div>
    <div class="stars">
      評価:
      @foreach (range(1,$review->review) as $index)
        <div class="star"></div>
      @endforeach
    </div>
    <div class="posted_text">{{$review->review_text}}</div>
    @endforeach
  </div>

    <div class="addreview">
        <button class="display_review_form">レビューを書く</button>
        <form class="review_form"action="/addreview" method="get">
        評価：<input type="number" name="star" value="" min="1" max="5">
            <input type="text" name="text" value="">
            <input type="hidden" name="product_id" value="{{$product->product_id}}">
            <input type="submit" name="some_name" value="送信">
        </form>
    </div>
</div>
<script src="/js/detail/review.js" charset="utf-8"></script>
@endsection
