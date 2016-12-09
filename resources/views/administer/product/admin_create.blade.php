@extends('/administer/admin_template')

@section('css','/admin/product/edit')
@section('title','商品新規登録')
@section('stock','class="active"')

@section('main')

    <h2>商品新規登録画面</h2>
    <form class="form-horizontal vuestock" action="/admin/stock" method="post">
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
            <span class="input-group-addon" >商品画像</span>
            <input type="text" name="product_image" v-model="product_image" class="form-control" placeholder="保留" value="" disabled>
        </div>
        <div class="input-group">
            <span class="input-group-addon" >値段</span>
            <input type="text" name="product_price" v-model="product_price" class="form-control" value="" required>
            <span class="input-group-addon" >在庫数</span>
            <input type="text" name="product_stock" v-model="product_stock" class="form-control" value="" required>
            <span class="input-group-addon" >翻訳者</span>
            <input type="text" name="trancelater_ID" v-model="trancelater_ID" class="form-control" value="" disabled>
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

        <button class="btn btn-default submitbutton" style="display:none" type="submit" name="submit">新規登録</button>
        <button type="button" class="btn btn-default confirm_button">確認</button>
        <button type="button" style="display:none" class="btn btn-default confirm_button2">戻る</button>
    </form>
    <div class="confirm" style="display:none">
      <div class="confirm_text">
        <p>商品ID:@{{product_id}}</p>
        <p>商品名:@{{product_name}}</p>
        <p>商品画像:@{{product_image}}</p>
        <p>商品価格:@{{product_price}}</p>
        <p>商品在庫数:@{{product_stock}}</p>
        <p>翻訳者ID:@{{trancelater_ID}}</p>
        <p>高さ:@{{product_height}}</p>
        <p>幅:@{{product_width}}</p>
        <p>奥行き:@{{product_depth}}</p>
        <p>ページ数:@{{product_page}}</p>
        <p>発売日:@{{product_start_day}}</p>
        <p>商品説明:@{{product_explanation}}</p>
      </div>
    </div>

        <script type="text/javascript">
        new Vue({
          el:'main',
          data:{
            product_id:'',
            product_name:'',
            product_image:'',
            product_price:'',
            product_stock:'',
            trancelater_ID:'',
            product_height:'',
            product_width:'',
            product_depth:'',
            product_page:'',
            product_start_day:'',
            product_explanation:''
                }

        })
        </script>
    <style media="screen">
      .confirm{
        position: fixed;
        top: 100px;
        bottom: 0;
        left: 0;
        right: 0;
        height:570px;
        width:700px;
        background: rgba(1, 1, 1, 0.8);
        margin: 0 auto;
        z-index: 99;
      }
      .confirm_text{
        text-align: center;
        z-index: 100;
      }
      .confirm_text p{
        color: white;
      }
    </style>
    <script type="text/javascript">
    $('.confirm_button').click(function(){
      $('.submitbutton').fadeIn();
      $('.confirm').fadeIn();
      $('.confirm_button2').fadeIn();
    })
    $('.confirm_button2').click(function(){
      $('.submitbutton').fadeOut();
      $('.confirm').fadeOut();
      $('.confirm_button2').fadeOut();
    })
    </script>

@endsection
