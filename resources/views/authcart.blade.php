@extends('template')
@section('title','cart')
@section('css','cart')
@section('main')
<div class="container">
    <div class="title">
        <h2>ショッピングカート</h2></div>
    <div class="contents">
        <div class="content">
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>商品名</th>
                        <th>著者</th>
                        <th>出版社</th>
                        <th>金額</th>
                        <th>数量</th>
                        <th>小計</th>
                        <th>削除</th>
                    </tr>
                </thead>
                <tbody>

                  @foreach ($products as $product)
                    <tr>
                      <td><img src="{{$product->cartProduct[0]->product_image}}" alt="" /></td>
                      <td>{{$product->cartProduct[0]->product_name}}</td>
                      <td>テキストがはいりますテキストがはいりますテキストがはいりますテキストがはいりますテキストがはいります</td>
                      <td>hoge</td>
                      <td>2,200円</td>
                      <td class="btn">
                        <form class="" action="/cart/edit/" method="post">
                          <select class="sum" name="sum">
                            @for ($i=1; $i <= 10; $i++)
                              <option value="{{$i}}">{{$i}}</option>
                            @endfor
                          </select>
                        </form>
                      </td>
                      <td>2,200円</td>
                      <td><form action="/delauthcart" method="post">
                              <div class="form-bottom">
                                <input type="hidden" name="product_id" value="{{$product->product_id}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" value="x">
                              </div>
                          </form>
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
                <div class="back"><a href="/">買い物を続ける</a></div>
                <div class="next"><a href="buy">レジに進む</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
