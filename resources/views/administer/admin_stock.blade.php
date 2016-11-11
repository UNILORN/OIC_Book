@extends('/administer/admin_template')

@section('css','/admin/stock')
@section('title','stock')

@section('main')

<div class="container">
  <div id="products_header">
    <li>商品ID</li>
    <li>商品名</li>
    <li>在庫</li>
    <li>単価</li>
  </div>

  @foreach ($products as $product)
  <div class="product">
      <li>{{$product->product_id}}</li>
      <li>{{$product->product_name}}</li>
      <li>{{$product->product_stock}}個</li>
      <li>{{$product->product_price}}円</li>
  </div>
  @endforeach

  <div id="product_edit">
    <a href="#"><li>検索</li></a>
    <a href="#"><li>追加</li></a>
    <a href="#"><li>削除</li></a>
    <a href="#"><li>変更</li></a>
  </div>

</div>

@endsection
