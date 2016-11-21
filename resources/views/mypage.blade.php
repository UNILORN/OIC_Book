@extends('template')
@section('title','mypage')
@section('css','mypage')


@section('main')
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
        <div class="box-title">
          <h3>会員登録情報</h3>
        </div>
        <table>
          <tr class="status">
            <th>お客様情報</th>
            <td>
              <li>ID：{{$user->id}}</li>
              <li>名前：{{$user->name}}</li>
              <li>メールアドレス：{{$user->email}}</li>
              <li>郵便番号：〒{{$user->user_post_code}}</li>
              <li>住所：{{$user->user_address}}</li>
              <li>電話番号：{{$user->user_phone_number}}</li>
              <li>残ポイント：{{$user->user_point}}</li>
              <li>最終ログイン：{{$user->user_last_login}}</li>
            </td>
          </tr>
        </table>
      </main>
    </div>
  </div>
@endsection
