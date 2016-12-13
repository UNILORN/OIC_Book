@extends('template')
@section('title','注文確認')
@section('css','buy_confirm')


@section('main')
  <div class="buy_item">
    <div class="confirm_container">
        <div class="confirm_contents">
            <div class="confirm_content">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>商品名</th>
                            <th>金額</th>
                            <th>数量</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($products as $value)
                        <tr>
                          <td class="product_img"><img src="{{ $value->product_image }}" alt="" /></td>
                          <td class="product_name">{{ $value->product_name }}</td>
                          <td class="product_price">{{ $value->product_price}}円</td>
                          <td>{{$value->product_order_number}}</td>
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
</div>
  </div>
</div>
<div class="buy_cont">
  <div class="buy_button">
    <form  action="/buy_done" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input class="button_enter" type="submit" value="確定">
    </form>
  </div>
 <div class="buy_method">
       <form class="method_from">
         <p>支払い方法</p>
     <p>{{ $buy }}</p>
     <input type="hidden" name="buy" class="form" value="{{$buy}}" disabled="disabled">
 </form>
</div>

<div class="buy_profile">
  <table>
      <th>御客様情報</th>
    <tbody>

  <form class="profile_form"  action="buy_done" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="input">
    <tr>
      <th><span class="input-span">名前</span></th>
      <td><input type="hidden" text="text" name="name" class="form">{{ $user->name }}</td>
  </tr>
</div>

<div class="input">
<tr>
    <th><span class="input-span">E-mail</span></th>
    <td><input type="hidden" text="text" name="email" class="form">{{$user->email}}</td>
</tr>
</div>
<div class="input">
<tr>
    <th><span class="input-span">〒</span></th>
    <td><input type="hidden" text="text" name="post" class="form">{{$user->user_post_code}}</td>
</tr>
</div>
<div class="input">
<tr>
  <th><span class="input-span">住所</span></th>
  <td><input type="hidden" text="text" name="address" class="form">{{$user->user_address}}</td>
</tr>
</div>
<div class="input">
<tr>
  <th><span class="input-span">電話番号</span></th>
  <td><input type="hidden" text="text" name="tel" class="form">{{$user->user_phone_number}}</td>
</tr>
</div>
<div class="input">
<tr>
  <th><span class="input-span">ポイント</span></th>
  <td><input type="hidden" text="text" name="point" class="form">{{$user->user_point}}pt</td>
</tr>
</div>
<!--<div id="message">
  <a href="#"> > 編集</a>
</div>-->
</form>
</tbody>
</table>
</div>


</div>

@endsection
