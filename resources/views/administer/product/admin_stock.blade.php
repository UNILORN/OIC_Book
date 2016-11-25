@extends('/administer/admin_template')

@section('css','/admin/product/stock')
@section('title','商品在庫')
@section('stock','class="active"')

@section('main')
<div class="searchform">
  <form class="search" action="/admin/stock" method="GET">
    <div class="input-group">
      <span class="input-group-addon">商品ID</span>
      <input type="text" name="product_id" class="form-control"  value="{{ array_get($request,'product_id','') }}">
    </div>
    <div class="input-group">
      <span class="input-group-addon">商品名称</span>
      <input type="text" name="product_name" class="form-control"  value="{{array_get($request,'product_name','') }}">
    </div>
    <div class="input-group">
      <span class="input-group-addon">商品価格</span>
      <input type="text" name="product_price_from" class="form-control"  value="{{array_get($request,'product_price_from','') }}">
      <span class="input-group-addon">〜</span>
      <input type="text" name="product_price_to"   class="form-control"  value="{{array_get($request,'product_price_to','') }}">
    </div>
    <input class="btn" type="submit" name="search" value="検索">
  </form>
</div>

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
