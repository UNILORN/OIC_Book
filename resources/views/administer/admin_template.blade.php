<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/admin/admin_template.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/css/reset.css" media="screen" title="no title" charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
    <div class="sidebar">
    <a href="#"><li>在庫</li></a>
    <a href="#"><li>従業員</li></a>
    <a href="#"><li>売上</li></a>
    <a href="#"><li>履歴</li></a>
    <a href="#"><li>発注</li></a>
    <a href="#"><li>入荷</li></a>
    <a href="#"><li>入金</li></a>
    </div>
      @yield('main')
  </body>
</html>
