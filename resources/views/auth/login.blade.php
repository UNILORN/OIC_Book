<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ログイン -OICbook</title>
    <link rel="stylesheet" type="text/css" href="/css/login.css">

  </head>
  <body>
    <div class="form-wrapper">
  <h1>Sign In</h1>

  <form action="/login" method="post">
    {{ csfr_field() }}
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
    <p><a href="#">Create an account</a></p>
    <p><a href="#">Forgot password?</a></p>
  </div>
</div>
  </body>
</html>
