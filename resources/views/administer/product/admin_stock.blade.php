@extends('/administer/admin_template')

@section('css','/admin/stock')
@section('title','商品在庫')
@section('stock','class="active"')

@section('main')
<table class="table">
  <tr>
    <th>商品ID</th>
    <th>商品名称</th>
    <th>価格</th>
    <th>在庫数（個）</th>
    <th>商品編集</th>
  </tr>
  @foreach ($products as $key => $value)
    <tr>
      <td>{{$value->product_id}}</td>
      <td>{{$value->product_name}}</td>
      <td>{{$value->product_price}}</td>
      <td>{{$value->product_stock}}</td>
      <td>
          <button type="button" name="button" onclick="location.href='/admin/stock/{{$value->product_id}}/edit'">編集</button>
      </td>
    </tr>
  @endforeach

</table>
@endsection
