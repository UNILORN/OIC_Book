@extends('/administer/admin_template')

@section('css','/admin/stock')
@section('title','stock')

@section('main')

<div class="container">
  <div id="products_header">
    <li>商品名</li>
    <li>個数</li>
    <li>単価</li>
  </div>

  @foreach ($products as $product)
  <div class="product">
      <li>{{$product->product_name}}</li>
      <li>{{$product->product_stock}}個</li>
      <li>{{$product->product_price}}円</li>
  </div>
  @endforeach

  <div id="product_edit">
    <a href="#"><li>商品追加</li></a>
    <a href="#"><li>商品削除</li></a>
    <a href="#"><li>単価変更</li></a>
  </div>

</div>

@endsection
