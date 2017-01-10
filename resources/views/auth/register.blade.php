@extends('template')
@section('title','新規登録')
@section('css','bootstrap.min')
@section('main')

    <form action="/register" method="post" class="center-block">
                        {{ csrf_field() }}
                        <div class="form">
                          <div class="form-item">
                            <label for="name"></label>
                            <input type="text" name="name" required="required" placeholder="Your Name"></input>
                          </div>
                          <div class="form-item">
                            <label for="email"></label>
                            <input type="email" name="email" required="required" placeholder="Email Address"></input>
                          </div>
                          <div class="form-item">
                            <label for="password"></label>
                            <input type="password" name="password" required="required" placeholder="Password"></input>
                          </div>
                          <div class="form-item">
                            <label for="password"></label>
                            <input type="password" name="password_confirmation" required="required" placeholder="Confirmation Password"></input>
                          </div>
                          <div class="form-item">
                            <label for="user_post_code"></label>
                            <input type="text" name="user_post_code" required="required" placeholder="〒"></input>
                          </div>
                          <div class="form-item">
                            <label for="user_address"></label>
                            <input type="text" name="user_address" required="required" placeholder="Your Address"></input>
                          </div>
                          <div class="form-item">
                            <label for="user_phone_number"></label>
                            <input type="tel" name="user_phone_number" required="required" placeholder="Tel"></input>
                          </div>

                        <input class="btn" type="submit" value="確認">
                      </div>
                    </form>
@endsection
