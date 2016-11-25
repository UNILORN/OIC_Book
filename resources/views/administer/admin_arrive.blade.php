@extends('/administer/admin_template')
@section('css','/admin/employee')
@section('title','入荷情報')
@section('arrive','class="active"')

@section('main')
  <table class="table">
    <tr>
      <th>入荷ID</th>
      <th>発注ID</th>
      <th>入荷予定日</th>
      <th>入荷日</th>
      <th>入荷商品名</th>
      <th>数量</th>
      <th>入荷価格</th>
    </tr>
    @foreach ($arrive as $key => $value)
      <tr>
        <td>{{$value->arrive_id}}</td>
        <td>{{$value->order_id}}</td>
        <td>{{$value->arriveOrder["order_day"]}}</td>
        <td>{{$value->arrive_day}}</td>
        <td>{{$value->arriveOrder["orderProduct"]["product_name"]}}</td>
        <td>{{$value->arrive_number}}</td>
        <td>{{$value->arrive_price}}</td>
      </tr>
    @endforeach

  </table>

@endsection
