@extends('/administer/admin_template')

@section('css','/admin/stock')
@section('title','stock')
@section('stock','class="active"')

@section('main')
<table class="table">
  <tr>
    <th>商品ID</th>
    <th>商品名称</th>
    <th>価格</th>
    <th>在庫数（個）</th>
  </tr>
  @foreach ($products as $key => $value)
    <tr>
      <td>{{$value->product_id}}</td>
      <td>{{$value->product_name}}</td>
      <td>{{$value->product_price}}</td>
      <td>{{$value->product_stock}}</td>
    </tr>
  @endforeach

</table>
@endsection
