@extends('template')
@section('title','detail')
@section('css','detail')

@section('main')
  <div class="product_content">
    <div class="product_img">
      <img src="{{$product->product_image}}" alt="しろくまちゃんのほっとけーき">
    </div>
    <div class="product_text">
        <h1 class="product_title">{{$product->product_name}}</h1>
        <p>{{$product->productGenre["category"]}}</p>
        <p class="price">
          ￥{{$product->product_price}}
        </p>
        <from action="/cart" method="POST">
            <div class="cart-form">
                <div class="cart-num">
                  <select name="amount_" class="form-select hasCustomSelect">
                    @foreach (range(1,$product->product_stock) as $key => $value)
                      <option value="{{$value}}">{{$value}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="cart-submit">
                  <input type="image" class="btn" alt="カートに入れる" src="./img/03.png" style="margin-left: 14px;" id="jp_cart_btn">
                </div>
              </div>
              <p><b>アイテム説明</b></p>
              <p>{{$product->product_explanation}}</p>
        </from>
    </div>
  </div>
@endsection
