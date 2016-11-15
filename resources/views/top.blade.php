@extends('template')
@section('title','top')
@section('css','top')

@section('main')
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

          <div class="contents">
              <div class="topimg">
                  <img src="/img/banner.png">
              </div>
              <div class="ranking" id="ranking">
                  <h2>人気ランキング</h2>
                  <div class="ranking-list">
                      <ul>
                          <li><a href="#"><span class="rank rank1">No.1</span><span><img src="./img/kiminonaha.jpg" /></span><span class="item-name">君の名は。</span><span class="price">&yen;999</span></a></li>
                          <li><a href="#"><span class="rank rank2">No.2</span><span><img src="./img/jinko.jpg" /></span><span class="item-name">人工知能は人元を超えるか</span><span class="price">&yen;999</span></a></li>
                          <li><a href="#"><span class="rank rank3">No.3</span><span><img src="./img/rezero.jpg" /></span><span class="item-name">Re:ゼロから始める異世界生活</span><span class="price">&yen;999</span></a></li>
                          <li><a href="#"><span class="rank rank4">No.4</span><span><img src="./img/kankore.jpg" /></span><span class="item-name">艦娘型録</span><span class="price">&yen;999</span></a></li>
                          <li><a href="#"><span class="rank rank5">No.5</span><span><img src="./img/ookami.jpg" /></span><span class="item-name">狼と香辛料</span><span class="price">&yen;999</span></a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
