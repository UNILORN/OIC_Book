<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/reset.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/css/main.css" media="screen" title="no title">
    <link rel="stylesheet" href="/css/@yield('css').css" media="screen" title="no title" charset="utf-8">
    <script src="/js/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>
      <div id="pagetop"></div>
          <div class="layout" id="Top">
              <div class="header-container" id="Header">
                  <div class="header">
                      <div class="login-nav-section">
                          <div class="login-nav">
                              <ul>
                                  <li><a href="sign.html">今すぐ会員登録</a></li>
                                  <li class="login"><a href="login.html">ログイン</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="g-nav-container" id="GlobalNav">
                          <div class="logo">
                              <a href="/jp/"><img src="/img/Logo.png" alt="oic-book" height="60" width="140"></a>
                          </div>

                          <div class="brand-search-group">
                              <div class="header-nav-other">
                                  <div class="search-section">
                                      <form class="search-form" action="#">
                                          <input type="text" placeholder="アイテム検索" class="f-query" name="word" id="q">
                                          <input type="submit" class="btn" value="">
                                      </form>
                                      <div class="store-nav">
                                          <ul>
                                              <li>
                                                  <a href="#"><img src="//hih67k1jnwfciz.cdn.jp.idcfcloud.com/images/favorite2.gif" width="45" height="40" alt="お気に入りアイテム"></a>
                                              </li>
                                          </ul>
                                      </div>
                                      <div id="BagWrap" class="bag-wrap">
                                          <div class="bag">
                                              <a href="/jp/cart/?sid=" id="header_view_cart_link1"><img alt="bag" src="//hih67k1jnwfciz.cdn.jp.idcfcloud.com/images/cart3.gif"><span class="item-num-wrap"><span class="item-num">0</span></span>
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              @yield('main')
              </div>
          </div>
      </div>
  </body>
</html>
