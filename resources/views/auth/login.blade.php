@extends('template')
@section('title','ログイン')
@section('css','login')
@section('main')

    <div class="form-wrapper">
  <h1>Sign In</h1>

  <form action="/login" method="post">
    {{ csrf_field() }}
    <div class="form-item">
      <label for="email"></label>
      <input type="email" name="email" required="required" placeholder="Email Address"></input>
    </div>
    <div class="form-item">
      <label for="password"></label>
      <input type="password" name="password" required="required" placeholder="Password"></input>
    </div>
    <div class="button-panel">
      <input type="submit" class="button" title="Sign In" value="Sign In"></input>
    </div>
  </form>
  <div class="form-footer">
    <p><a href="/register">Create an account</a></p>
  </div>
</div>
@endsection
