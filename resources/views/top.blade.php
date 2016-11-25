@extends('template')
@section('title','top')
@section('css','top')

@section('main')
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
@endsection
