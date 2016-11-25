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


                                      <button  style="display:none" type="submit" class="btn btn-primary submitbutton">
                                      Register
                                      </button>
                                      <button type="button" class="confirm_button">確認</button>

                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="confirm" style="display:none">
  <div class="confirm_text">
    <p>name:@{{name}}</p>
    <p>email:@{{email}}</p>
    <p>郵便番号:@{{user_post_code}}</p>
    <p>住所:@{{user_address}}</p>
    <p>電話番号:@{{user_phone_number}}</p>
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
    height:350px;
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
  $('.formfadeout').fadeout();
})

</script>
@endsection
