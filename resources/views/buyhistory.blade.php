@extends('template')
@section('title','buyhistory')
@section('css','buyhistory')


@section('main')
<link rel="stylesheet" href="/css/buyhistory.css" media="screen" title="no title" charset="utf-8">

  <div class="maincontent">
    <div class="content">
      <h2>マイページ</h2>
      <sub>
        <div class="side01">
          <h2>{{$user->name}}</h2>
        </div>
        <ul class="side02">
          <li><a href="/mypage">会員登録情報</a></li>
          <li><a href="#">購入履歴</a></li>
          <li><a href="#">ポイント履歴</a></li>
        </ul>
      </sub>
      <main>
        <div class="histories">
          <table>
            <thead>
              <th>

              </th>
              <th>
                商品名
              </th>
              <th>
                購入日付
              </th>
            </thead>
            <tbody>
            @foreach ($histories as $history)
                  <tr>
                    <td><div class="img"><a href="detail/?product_id={{$history->product_id}}"><img src="{{$history->product_image}}" alt="" /></a></div></td>
                    <td><a href="detail/?product_id={{$history->product_id}}">{{$history->product_name}}</a></td>
                    <td>{{$history->product_start_day}}</td>
                  </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>
@endsection
