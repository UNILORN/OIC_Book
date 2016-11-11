<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/admin/admin_template.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/css/reset.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/css/@yield('css').css" media="screen" title="no title" charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
    <div class="sidebar">
    <a href="/admin/stock"><li>商品情報</li></a>
    <a href="/admin/employee"><li>従業員</li></a>
    <a href="/admin/sales"><li>売上</li></a>
    <a href="/admin/history"><li>履歴</li></a>
    <a href="/admin/order"><li>発注</li></a>
    <a href="/admin/arrive"><li>入荷</li></a>
    <a href="/admin/payment"><li>入金</li></a>
    </div>
      @yield('main')
  </body>
</html>
