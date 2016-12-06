@extends('/administer/admin_template')

@section('css','/admin/product/edit')
@section('title','仕入先新規登録')
@section('stock','class="active"')

@section('main')

    <h2>仕入先新規登録画面</h2>
    <form class="form-horizontal" action="/admin/order" method="post">
        {{csrf_field()}}
        <div class="input-group">
            <span class="input-group-addon" >仕入先ID</span>
            <input type="text" name="vendor_id" v-model="vendor_id" class="form-control"  value="" disabled>
        </div>
        <div class="input-group">
            <span class="input-group-addon" >仕入先名</span>
            <input type="text" name="vendor_name" v-model="vendor_name" class="form-control" value="">
        </div>
        <div class="input-group">
            <span class="input-group-addon" >メールアドレス</span>
            <input type="text" name="vendor_email" v-model="vendor_email" class="form-control" value="">
            <span class="input-group-addon" >住所</span>
            <input type="text" name="vendor_address" v-model="vendor_address" class="form-control" value="">
            <span class="input-group-addon" >電話番号</span>
            <input type="text" name="vendor_phone_number" v-model="vendor_phone_number" class="form-control" value="">
        </div>


        <button class="btn btn-default submitbutton" style="display:none" type="submit" name="submit">新規登録</button>
        <button type="button" class="confirm_button">確認</button>
        <button type="button" style="display:none" class="confirm_button2">戻る</button>
    </form>
    <div class="confirm" style="display:none">
      <div class="confirm_text">
        <p>仕入先ID:@{{vendor_id}}</p>
        <p>仕入先名:@{{vendor_name}}</p>
        <p>メールアドレス:@{{vendor_email}}</p>
        <p>住所:@{{vendor_address}}</p>
        <p>電話番号:@{{vendor_phone_number}}</p>

      </div>
    </div>

        <script type="text/javascript">
        new Vue({
          e1:'body',
          date:{
            name:'name',
            email:'email',
            user_post_code:'user_post_code',
            user_address:'user_address',
            user_phone_number:'user_phone_number'
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
      }
      .confirm_text{
        text-align: center;

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
