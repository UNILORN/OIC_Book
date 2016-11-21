@extends('/administer/admin_template')

@section('css','/admin/employee')
@section('title','発注リスト')
@section('order','class="active"')

@section('main')
  <table class="table">
    <tr>
      <th>発注ID</th>
      <th>仕入先名</th>
      <th>担当従業員名</th>
      <th>発注商品名</th>
      <th>数量</th>
      <th>発注日付</th>
      <th>入荷予定日</th>
      <th>注文残量</th>
    </tr>
    @foreach ($order as $key => $value)
      <tr>
        <td>{{$value->order_id}}</td>
        <td>{{$value->orderVendor["vendor_name"]}}</td>
        <td>{{$value->employee_id}}</td>
        <td>{{$value->orderProduct["product_name"]}}</td>
        <td>{{$value->order_number}}</td>
        <td>{{$value->order_day}}</td>
        <td>{{$value->arrive_plan}}</td>
        <td>{{$value->remaining_amount}}</td>
      </tr>
    @endforeach

  </table>

@endsection
