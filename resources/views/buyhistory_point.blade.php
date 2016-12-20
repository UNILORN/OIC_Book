@extends('template')
@section('title','ポイント履歴')
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
          <li><a href="/buyhistory">購入履歴</a></li>
          <li><a href="/buyhistory_point">ポイント履歴</a></li>
        </ul>
      </sub>
      <main>
        <div class="histories">
          <table>
            <thead>
              <th>
                購入日
              </th>
              <th>
                利用ポイント
              </th>
              <th>
                付加ポイント
              </th>
            </thead>
            <tbody>
              @foreach ($histories as $key => $value)
                <tr>
                  <td>{{$value->uorder_day}}</td>
                  <td>{{$value->uorder_use_point}}</td>
                  <td>{{$value->uorder_add_point}}</td>
                </tr>
                    @endforeach
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>
@endsection
