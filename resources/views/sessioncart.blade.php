@extends('template')
@section('title','ショッピングカート')
@section('css','cart')
@section('main')
@if ($products)

<div class="container">
    <div class="contents">
        <div class="content">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width:170px;"></th>
                        <th style="width:240px;">商品名</th>
                        <th style="width:150px;">著者</th>
                        <th style="width:100px;">金額</th>
                        <th style="width:100px;">数量</th>
                        <th style="width:100px;">小計</th>
                        <th style="width:100px;">削除</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($products as $index => $product)
                    <tr>
                      <td class="product_img"><img src="{{$product->product_image}}" alt="" /></td>
                      <td class="product_name">{{$product->product_name}}</td>
                      <td class="auther_name">{{$product->auther_name}}</td>
                      <td class="product_price">{{$product->product_price}}</td>
                      <td class="quantity">
                        残り在庫 : {{$product->product_stock}}
                        <select class="number">
                          @foreach (range(1, $product->product_stock) as $number)
                              @if($product->product_cart_number == $number)
                                <option value="{{$number}}" selected index="{{$product->product_id}}">{{$number}}</option>
                              @else
                                <option  value="{{$number}}" index="{{$product->product_id}}">{{$number}}</option>
                              @endif
                          @endforeach
                        </select>
                      </td>
                      <td class="subtotal">{{$product->product_price*$product->product_cart_number}}円</td>
                      <td class="del_btn">
                          <div class="form-bottom">
                            <form action="/delsessioncart" method="post">
                              <input type="hidden" name="index" value="{{$index}}">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <input type="submit" value="x">
                            </form>
                          </div>
                      </td>
                  @endforeach
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="total">
            <div class="inner">
                合計金額 <span>{{$sum}}円</span>
            </div>
        </div>

        <div class="button">
            <div class="inner">
                <div class="back"><a href="search">買い物を続ける</a></div>
                <div class="next"><a href="buy">レジに進む</a></div>
            </div>
        </div>
    </div>
</div>
@else
  <div class="none_cart">
    <span>カートに商品がありません</span>
  </div>
@endif

<script src="/js/cart/sessioncart.js" charset="utf-8"></script>
@endsection
