@extends('/administer/admin_template')

@section('css','/admin/uorder_detail')
@section('title', 'uorderdetail')

@section('main')
  <table class="table">
    <tr>
      <th>注文ID</th>
      <th>注文日付</th>
      <th>注文者名</th>
      <th>合計金額</th>
      <th>利用ポイント</th>
      <th>付加ポイント</th>
      <th>購入商品名</th>
      <th>商品個数</th>
    </tr>
    @foreach ($sales as $key => $value)
      <tr>
        <td>{{$value->uorder_id}}</td>
        <td>{{$value->uorder_day}}</td>
        <td>{{$value->uorderUser["name"]}}</td>
        <td>{{$value->uorder_price}}</td>
        <td>{{$value->uorder_use_point}}</td>
        <td>{{$value->uorder_add_point}}</td>
        <td>{{$value->uorderDetail["uorderProduct"]["product_name"]}}</td>
        <td>{{$value->uorderDetail["product_order_number"]}}</td>
      </tr>
    @endforeach

  </table>

@endsection
