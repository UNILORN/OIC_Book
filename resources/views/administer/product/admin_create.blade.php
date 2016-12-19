@extends('/administer/admin_template')

@section('css','/admin/product/edit')
@section('title','商品新規登録')
@section('stock','class="active"')

@section('main')

    <h2>商品新規登録画面</h2>
    <form class="form-horizontal" action="/admin/stock" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="input-group">
            <span class="input-group-addon" >商品ID</span>
            <input type="text" name="product_id" v-model="product_id" class="form-control"  value="" disabled>
        </div>
        <div class="input-group">
            <span class="input-group-addon" >商品名</span>
            <input type="text" name="product_name" v-model="product_name" class="form-control" value="" required>
        </div>
        <div class="input-group">
            <span class="input-group-addon" >商品ジャンル</span>
            <select name="product_genre" v-model="product_genre" class="form-control">
                <option value="1">小説</option>
                <option value="2">漫画</option>
                <option value="3">専門書</option>
                <option value="4">絵本</option>
            </select>
        </div>
        <div class="input-group">
            <span class="input-group-addon" >商品画像</span>
            <input type="file" name="product_image" v-model="product_image" class="form-control" placeholder="保留" value="">
        </div>
        <div class="input-group">
            <span class="input-group-addon" >著者</span>
            <input type="text" name="product_authername" v-model="product_authername" class="form-control" value="" required>
            <span class="input-group-addon" >翻訳者</span>
            <input type="text" name="trancelater_ID" v-model="trancelater_ID" class="form-control" value="" disabled>
        </div>
        <div class="input-group">
            <span class="input-group-addon" >値段</span>
            <input type="text" name="product_price" v-model="product_price" class="form-control" value="" required>
            <span class="input-group-addon" >在庫数</span>
            <input type="text" name="product_stock" v-model="product_stock" class="form-control" value="" required>
        </div>
        <div class="input-group">
            <span class="input-group-addon" >高さ</span>
            <input type="text" name="product_height" v-model="product_height"class="form-control" value="" required>
            <span class="input-group-addon" >幅</span>
            <input type="text" name="product_width" v-model="product_width" class="form-control"  value="" required>
            <span class="input-group-addon" >奥行き</span>
            <input type="text" name="product_depth" v-model="product_depth" class="form-control" value="" required>
        </div>
        <div class="input-group">
            <span class="input-group-addon" >ISBN</span>
            <input type="text" name="ISBN" class="form-control" value="" required>
        </div>
        <div class="input-group">
            <span class="input-group-addon" >ページ数</span>
            <input type="text" name="product_page" v-model="product_page" class="form-control" value="" required>
        </div>
        <div class="input-group">
            <span class="input-group-addon" >発売日</span>
            <input type="date" name="product_start_day" v-model="product_start_day" class="form-control" value="" required>
        </div>
        <div class="input-group">
            <span class="input-group-addon" >商品説明</span>
            <textarea id="textarea" type="textarea" v-model="product_explanation" name="product_explanation" class="form-control" required></textarea>
        </div>

        <button class="btn btn-default "  type="submit" name="submit">新規登録</button>
    </form>
@endsection
