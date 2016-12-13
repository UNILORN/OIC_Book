@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal formfadeout" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" v-model="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" v-model="email"class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="user_post_code" class="col-md-4 control-label">郵便番号</label>

                          <div class="col-md-6">
                            <input id="user_post_code" type="text" v-model="user_post_code" class="form-control" name="user_post_code" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="user_address" class="col-md-4 control-label">住所</label>

                          <div class="col-md-6">
                            <input id="user_address" type="text" class="form-control" v-model="user_address" name="user_address" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="user_phone_number" class="col-md-4 control-label">電話番号</label>

                          <div class="col-md-6">
                            <input id="user_phone_number" type="text" class="form-control" v-model="user_phone_number" name="user_phone_number" required>
                          </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                              <!-- モーダルウィンドウの中身 -->
                              <div class="modal fade" id="myModal">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title">以下の入力に間違いがなければ「Register」を押してください！</h4>
                                    </div>
                                    <div class="modal-body">
                                      <div class="confirm" style="display:none">
                                        <div class="confirm_text">
                                          <div class="input-group">
                                            <span class="input-group-addon">name</span>
                                            <input class="form-control" type="text" name="name" value="@{{name}}" disabled></p>
                                          </div>
                                          <div class="input-group">
                                            <span class="input-group-addon">Email</span>
                                            <input class="form-control" type="text" name="email" value="@{{email}}" disabled></p>
                                          </div>
                                          <div class="input-group">
                                            <span class="input-group-addon">郵便番号</span>
                                            <input class="form-control" type="text" name="user_post_code" value="@{{user_post_code}}" disabled></p>
                                          </div>
                                          <div class="input-group">
                                            <span class="input-group-addon">住所</span>
                                            <input class="form-control" type="text" name="user_address" value="@{{user_address}}" disabled></p>
                                          </div>
                                          <div class="input-group">
                                            <span class="input-group-addon">電話番号</span>
                                            <input class="form-control" type="text" name="user_phone_number" value="@{{user_phone_number}}" disabled></p>
                                          </div>
                                        </div>
                                      </div>
                                      <button  style="display:none" type="submit" class="btn btn-primary submitbutton">
                                      Register
                                      </button>

                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-primary" data-dismiss="modal">閉じる</button>
                                     </div>
                                  </div>
                                </div>
                              </div>


                                      <!-- モーダルウィンドウを呼び出すボタン -->
                                      <button type="button" class="btn btn-primary confirm_button" data-toggle="modal" data-target="#myModal">確認</button>

                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
