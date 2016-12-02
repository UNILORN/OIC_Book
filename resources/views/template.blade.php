<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/reset.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/css/main.css" media="screen" title="no title">
    <link rel="stylesheet" href="/css/stylesheet/stylesheet3.css" media="screen" title="no title">
    <link rel="stylesheet" href="/css/@yield('css').css" media="screen" title="no title" charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="/js/jquery.min.js" charset="utf-8"></script>
  <body>
      <div id="pagetop"></div>
          <div class="layout" id="Top">
              <div class="header-container" id="Header">
                  <div class="header">
                      <div class="login-nav-section">
                          <div class="login-nav">
                              <ul>
                                  @if(Auth::check())
                                    <li class="login"><a href="/logout">ログアウト</a></li>
                                  @else
                                    <li><a href="/register">今すぐ会員登録</a></li>
                                    <li class="login"><a href="/login">ログイン</a></li>
                                  @endif
                              </ul>
                          </div>
                      </div>
                      <div class="g-nav-container" id="GlobalNav">
                          <div class="logo">
                              <a href="/"><img src="/img/Logo.png" alt="oic-book" height="60" width="140"></a>
                          </div>

                          <div class="brand-search-group">
                              <div class="header-nav-other">
                                  <div class="search-section">

                                      <form class="search-form" action="/search">
                                          <input type="text" placeholder="アイテム検索" class="f-query" name="product_name" id="q">
                                          <input type="submit" class="btn" value="">
                                      </form>
                                      <div class="store-nav">
                                          <ul>
                                              <li>
                                                  <a href="/mypage"><img src="//hih67k1jnwfciz.cdn.jp.idcfcloud.com/images/favorite2.gif" width="45" height="40" alt="お気に入りアイテム"></a>
                                              </li>
                                          </ul>
                                      </div>
                                      <div id="BagWrap" class="bag-wrap">
                                          <div class="bag">
                                              @if(Auth::check())
                                              <a href="/authcart" id="header_view_cart_link1">
                                                <img alt="bag" src="//hih67k1jnwfciz.cdn.jp.idcfcloud.com/images/cart3.gif">
                                                <?php
                                                  $user = Auth::user();
                                                  $cart = new \App\Service\AuthcartService;
                                                  $products = $cart->getItems($user->id);
                                                ?>
                                                  <span class="item-num-wrap"><span class="item-num">{{count($products)}}</span></span>
                                              </a>
                                              @else
                                                <a href="/sessioncart" id="header_view_cart_link1">
                                                  <img alt="bag" src="//hih67k1jnwfciz.cdn.jp.idcfcloud.com/images/cart3.gif">
                                                  <span class="item-num-wrap"><span class="item-num">{{count(session()->get("cart",[]))}}</span></span>
                                                </a>
                                              @endif
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
