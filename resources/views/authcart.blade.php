@extends('template')
@section('title','ショッピングカート')
@section('css','cart')
@section('main')
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

                  @foreach ($products as $product)
                    <tr>
                      <td class="product_img"><img src="{{$product->cartProduct[0]->product_image}}" alt="" /></td>
                      <td class="product_name">{{$product->cartProduct[0]->product_name}}</td>
                      <td class="auther_name">{{$product->cartProduct[0]->auther_name}}</td>
                      <td class="product_price">{{$product->cartProduct[0]->product_price}}円</td>
                      <td class="quantity">
                          残り在庫 : {{$product->cartProduct[0]->product_stock}}
                          <select class="number">
                            @foreach (range(1, $product->cartProduct[0]->product_stock) as $number)
                                @if($product->product_cart_number == $number)
                                  <option value="{{$number}}" selected index="{{$product->product_id}}">{{$number}}</option>
                                @else
                                  <option  value="{{$number}}" index="{{$product->product_id}}">{{$number}}</option>
                                @endif
                            @endforeach
                          </select>
                      </td>



                      <td class="subtotal">{{$product->cartProduct[0]->product_price*$product->product_cart_number}}円</td>
                      <td class="del_btn">
                          <form action="/delauthcart" method="post">
                              <div class="form-bottom">
                                <input type="hidden" name="product_id" value="{{$product->product_id}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" value="x">
                              </div>
                          </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>

        <div class="total">
            <div class="inner">
                合計金額 <span>{{$sum}}円</span>
            </div>
        </div>

        <div class="button">
            <div class="back_or_next">
                <div class="back"><a href="search">買い物を続ける</a></div>
                <div class="next"><a href="buy">レジに進む</a></div>
            </div>
        </div>
    </div>
</div>
<script src="/js/cart/authcart.js" charset="utf-8"></script>
@endsection
