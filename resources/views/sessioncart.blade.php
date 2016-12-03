@extends('template')
@section('title','cart')
@section('css','cart')
@section('main')
<div class="container">
    <div class="contents">
        <div class="content">
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>商品名</th>
                        <th>著者</th>
                        <th>金額</th>
                        <th>数量</th>
                        <th>小計</th>
                        <th>削除</th>
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
                        <form action="/cart/edit/" method="post">
                              残り在庫 : {{$product->product_stock}}
                              <input class="number" type="number" min="1" max="{{$product->product_stock}}" value="{{$product->number}}" index="{{$index}}">
                        </form>
                      </td>
                      <td class="subtotal">2,200円</td>
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
                合計金額 <span>2,200円</span>
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
<script src="/js/cart/cart.js" charset="utf-8"></script>
@endsection
