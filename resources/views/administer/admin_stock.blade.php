@extends('/administer/admin_template')

@section('css','/admin/stock')
@section('title','stock')

@section('main')

<div class="search">
  <p>商品名</p>
  <input type="text" name="some_name" value="">
  <h2 class="close">閉じる</h2>
</div>

<div class="add">
   <p>商品ID</p>
   <input type="text" name="some_name" value="">
   <p>商品名</p>
   <input type="text" name="some_name" value="">
   <p>在庫</p>
   <input type="text" name="some_name" value="">
   <p>単価</p>
   <input type="text" name="some_name" value="">
   <h2 class="close">閉じる</h2>
</div>

<div class="delete">
  <p>商品ID</p>
  <input type="text" name="some_name" value="">
  <p>商品名</p>
  <input type="text" name="some_name" value="">
  <h2 class="close">閉じる</h2>
</div>


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
    <a href="#" class="search_product"><li>検索</li></a>
    <a href="#" class="add_product"><li>追加</li></a>
    <a href="#" class="delete_product"><li>削除</li></a>
  </div>
</div>

<script charset="utf-8">
 $('.search_product').click(function(){
   $('.delete').fadeOut();
   $('.add').fadeOut();
   $('.search').fadeIn();
 })

 $('.add_product').click(function(){
   $('.delete').fadeOut();
   $('.search').fadeOut();
   $('.add').fadeIn();
 })

$('.delete_product').click(function(){
  $('.search').fadeOut();
  $('.add').fadeOut();
  $('.delete').fadeIn();
})

$('.close').click(function(){
  $('.search').fadeOut();
  $('.add').fadeOut();
  $('.delete').fadeOut();
})
</script>

@endsection
