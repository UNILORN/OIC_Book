@extends('/administer/admin_template')

@section('css','/admin/product/edit')
@section('title','商品編集')
@section('stock','class="active"')

@section('main')

  <h2>商品編集画面</h2>
  <form class="form-horizontal" action="/admin/stock/{{$id}}/update" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="input-group">
      <span class="input-group-addon" >商品ID</span>
      <input type="text" name="product_id" class="form-control"  value="{{$products->product_id}}" disabled>
    </div>
    <div class="input-group">
      <span class="input-group-addon" >商品名</span>
      <input type="text" name="product_name" class="form-control" placeholder="ProductName"  value="{{$products->product_name}}"required>
    </div>
    <div class="input-group">
      <span class="input-group-addon" >商品ジャンル</span>
      <select name="product_genre" v-model="product_genre" class="form-control">
        <option value="1" @if($products->genre_id == 1) selected @endif>小説</option>
        <option value="2" @if($products->genre_id == 2) selected @endif>漫画</option>
        <option value="3" @if($products->genre_id == 3) selected @endif>専門書</option>
        <option value="4" @if($products->genre_id == 4) selected @endif>絵本</option>
      </select>
    </div>
    <div class="input-group">
      <span class="input-group-addon" >商品画像</span>
      <img src="{{$products->product_image}}">
      <input type="file" name="product_image" class="form-control" value="">
    </div>
    <div class="input-group">
      <span class="input-group-addon" >著者</span>
      <input type="text" name="product_authername" v-model="product_authername" class="form-control" value="{{$products->auther_name}}" required>
      <span class="input-group-addon" >翻訳者</span>
      <input type="text" name="trancelater_ID" class="form-control" value="{{$products->trancelater_ID}}" disabled>
    </div>
    <div class="input-group">
      <span class="input-group-addon" >値段</span>
      <input type="text" name="product_price" class="form-control" placeholder="ProductName"  value="{{$products->product_price}}"required>
      <span class="input-group-addon" >在庫数</span>
      <input type="text" name="product_stock" class="form-control" placeholder="ProductName"  value="{{$products->product_stock}}"required>
    </div>
    <div class="input-group">
      <span class="input-group-addon" >高さ</span>
      <input type="text" name="product_height" class="form-control" placeholder="ProductName"  value="{{$products->product_height}}"required>
      <span class="input-group-addon" >幅</span>
      <input type="text" name="product_width" class="form-control" placeholder="ProductName"  value="{{$products->product_width}}"required>
      <span class="input-group-addon" >奥行き</span>
      <input type="text" name="product_depth" class="form-control" placeholder="ProductName"  value="{{$products->product_depth}}"required>
    </div>
    <div class="input-group">
      <span class="input-group-addon" >ISBN</span>
      <input type="text" name="ISBN" class="form-control" placeholder="ProductName"  value="{{$products->ISBN}}"required>
    </div>
    <div class="input-group">
      <span class="input-group-addon" >ページ数</span>
      <input type="text" name="product_page" class="form-control" placeholder="ProductName"  value="{{$products->product_page}}"required>
    </div>
    <div class="input-group">
      <span class="input-group-addon" >発売日</span>
      <input type="datetime" name="product_start_day" class="form-control" placeholder="ProductName"  value="{{$products->product_start_day}}"required>
    </div>
    <div class="input-group">
      <span class="input-group-addon" >商品説明</span>
      <textarea id="textarea" type="textarea" name="product_explanation" class="form-control" placeholder="ProductName"required>{{$products->product_explanation}}</textarea>
    </div>

    <button class="btn btn-default" type="submit" name="submit">更新</button>
  </form>
@endsection
