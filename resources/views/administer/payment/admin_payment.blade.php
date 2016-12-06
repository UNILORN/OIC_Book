@extends('/administer/admin_template')
@section('css','/admin/employee')
@section('title','入金確認フォーム')
@section('payment','class="active"')

@section('main')
    <div class="searchform">

        <form class="search" action="/admin/payment" method="GET">
            <div class="input-group">
                <span class="input-group-addon">注文ID</span>
                <input type="text" name="payment_id" class="form-control"
                       value="{{ array_get($request,'payment_id','') }}">
            </div>
            <div class="input-group">
                <span class="input-group-addon">注文者電話番号</span>
                <input type="text" name="user_phonenum" class="form-control"
                       value="{{array_get($request,'user_phonenum','') }}">
            </div>
            <div class="input-group">
                <span class="input-group-addon">注文日付</span>
                <input type="date" name="uorder_from" class="form-control"
                       value="{{array_get($request,'uorder_from','') }}">
                <span class="input-group-addon">〜</span>
                <input type="date" name="uorder_to" class="form-control"
                       value="{{array_get($request,'uorder_to','') }}">
            </div>
            <input class="btn btn-default" type="submit" name="search" value="検索">
        </form>
    </div>
  <table class="table">
    <tr>
      <th>注文ID</th>
      <th>注文日付</th>
      <th>合計金額</th>
      <th>注文者氏名</th>
      <th>注文者電話番号</th>
      <th>入金確認</th>
    </tr>
    @foreach ($payment as $key => $value)
      <tr>
        <td>{{$value->uorder_id}}</td>
        <td>{{$value->uorder_day}}</td>
        <td>{{$value->uorder_price}}</td>
        <th>{{$value->uorderUser["name"]}}</th>
        <th>{{$value->uorderUser["user_phone_number"]}}</th>
        <td>
          @if($value->uorder_payment)
            <span>入金済み</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn-danger" name="button" onclick="location.href='/admin/pay_form?id={{$value->uorder_id}}'">取り消し</button>
          @else
            <button type="button" name="button" onclick="location.href='/admin/payment_form?id={{$value->uorder_id}}'">入金確認</button>
          @endif
        </td>
      </tr>
    @endforeach
    {{$payment->links()}}

  </table>

@endsection
