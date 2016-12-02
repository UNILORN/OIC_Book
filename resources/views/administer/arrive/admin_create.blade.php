@extends('/administer/admin_template')

@section('css','/admin/product/edit')
@section('title','商品編集')
@section('stock','class="active"')

@section('main')

    <h2>商品新規登録画面</h2>
    <form class="form-horizontal" action="/admin/stock" method="post">
        {{csrf_field()}}
        <div class="input-group">
            <span class="input-group-addon" >商品ID</span>
            <input type="text" name="product_id" class="form-control"  value="" disabled>
        </div>
        <div class="input-group">
            <span class="input-group-addon" >商品名</span>
            <input type="text" name="product_name" class="form-control" value="">
        </div>
        <div class="input-group">
            <span class="input-group-addon" >商品画像</span>
            <input type="text" name="product_image" class="form-control" placeholder="保留" value="" disabled>
        </div>
        <div class="input-group">
            <span class="input-group-addon" >値段</span>
            <input type="text" name="product_price" class="form-control" value="">
            <span class="input-group-addon" >在庫数</span>
            <input type="text" name="product_stock" class="form-control" value="">
            <span class="input-group-addon" >翻訳者</span>
            <input type="text" name="trancelater_ID" class="form-control" value="" disabled>
        </div>
        <div class="input-group">
            <span class="input-group-addon" >高さ</span>
            <input type="text" name="product_height" class="form-control" value="">
            <span class="input-group-addon" >幅</span>
            <input type="text" name="product_width" class="form-control"  value="">
            <span class="input-group-addon" >奥行き</span>
            <input type="text" name="product_depth" class="form-control" value="">
        </div>
        <div class="input-group">
            <span class="input-group-addon" >ISBN</span>
            <input type="text" name="ISBN" class="form-control" value="">
        </div>
        <div class="input-group">
            <span class="input-group-addon" >ページ数</span>
            <input type="text" name="product_page" class="form-control" value="">
        </div>
        <div class="input-group">
            <span class="input-group-addon" >発売日</span>
            <input type="date" name="product_start_day" class="form-control" value="">
        </div>
        <div class="input-group">
            <span class="input-group-addon" >商品説明</span>
            <textarea id="textarea" type="textarea" name="product_explanation" class="form-control" ></textarea>
        </div>

        <button class="btn btn-default" type="submit" name="submit">新規登録</button>
    </form>
@endsection
