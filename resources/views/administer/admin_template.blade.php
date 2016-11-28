<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/admin/admin_template.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/css/reset.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/css/@yield('css').css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="/js/jquery.min.js" charset="utf-8"></script>
    <title>@yield('title')</title>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="#">管理者画面</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li @yield('stock')><a href="/admin/stock">商品情報</a></li>
            <li @yield('employee')><a href="/admin/employee">従業員</a></li>
            <li @yield('user')><a href="/admin/user">ユーザ</a></li>
            <li @yield('uoderdetail')><a href="/admin/uoderdetail">売上</a></li>
            <li @yield('order')><a href="/admin/order">発注</a></li>
            <li @yield('arrive')><a href="/admin/arrive">入荷情報</a></li>
            <li @yield('payment')><a href="/admin/payment">入金確認</a></li>
            <li @yield('mailform')><a href="/admin/mailform">発注先メールフォーム</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
      @yield('main')
    </main>

  </body>
</html>
