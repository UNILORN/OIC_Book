<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  </head>
  <body>
    <form action="/register" method="post" class="center-block">
                        {{ csrf_field() }}
                        <div class="form">
                          <div class="form-item">
                            <label for="name"></label>
                            <input type="text" name="name" required="required" placeholder="Your Name"></input>
                          </div>
                          @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong style="color:red;">正しく入力してください</strong>
                                    </span>
                          @endif
                          <div class="form-item">
                            <label for="email"></label>
                            <input type="email" name="email" required="required" placeholder="Email Address"></input>
                          </div>
                          @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong style="color:red;">{{ $errors->first('email') }}</strong>
                                    </span>
                          @endif
                          <div class="form-item">
                            <label for="password"></label>
                            <input type="password" name="password" required="required" placeholder="Password"></input>
                          </div>
                          @if ($errors->has('password'))
                                  <span class="help-block">
                                      <strong style="color:red;">パスワードは６文字以上です。</strong>
                                  </span>
                          @endif
                          <div class="form-item">
                            <label for="password"></label>
                            <input type="password" name="password_confirmation" required="required" placeholder="Confirmation Password"></input>
                          </div>
                          @if ($errors->has('password'))
                                  <span class="help-block">
                                      <strong style="color:red;">パスワードは６文字以上です。</strong>
                                  </span>
                          @endif
                          <div class="form-item">
                            <label for="user_post_code"></label>
                            <input type="text" name="user_post_code" required="required" placeholder="〒"></input>
                          </div>
                          @if ($errors->has('user_post_code'))
                                    <span class="help-block">
                                        <strong style="color:red;">正しく入力してください</strong>
                                    </span>
                          @endif
                          <div class="form-item">
                            <label for="user_address"></label>
                            <input type="text" name="user_address" required="required" placeholder="Your Address"></input>
                          </div>
                          @if ($errors->has('user_address'))
                                    <span class="help-block">
                                        <strong style="color:red;">正しく入力してください</strong>
                                    </span>
                          @endif
                          <div class="form-item">
                            <label for="user_phone_number"></label>
                            <input type="tel" name="user_phone_number" required="required" placeholder="Tel"></input>
                          </div>
                          @if ($errors->has('user_phone_number'))
                                    <span class="help-block">
                                        <strong style="color:red;">正しく入力してください</strong>
                                    </span>
                          @endif

                        <input class="btn" type="submit" value="確認">
                      </div>
                    </form>
                  </body>
                </html>
