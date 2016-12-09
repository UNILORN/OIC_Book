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

 <div class="buy_method">
  <p>{{ $buy }}</p>
</div>

<div class="buy_profile">
  <ul>
  <li>{{ $user->name }}</li>
  <li>{{$user->email}}</li>
  <li>{{$user->user_post_code}}</li>
  <li>{{$user->user_address}}</li>
  <li>{{$user->user_phone_number}}</li>
  <li>{{$user->user_point}}</li>
</div>




@endsection
