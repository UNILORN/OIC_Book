@extends('/administer/admin_template')
@section('css','/admin/employee')
@section('title','入金確認フォーム')
@section('payment','class="active"')

@section('main')
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
          @else
            <button type="button" name="button" onclick="location.href='/admin/payment_form?id={{$value->uorder_id}}'">入金確認</button>
          @endif
        </td>
      </tr>
    @endforeach
    {{$payment->links()}}

  </table>

@endsection
