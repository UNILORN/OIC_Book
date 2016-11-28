@extends('/administer/admin_template')

@section('css','/admin/employee')
@section('title','発注リスト')
@section('order','class="active"')

@section('main')

  <div class="searchform">
    <form class="search" action="/admin/order" method="GET">
      <div class="input-group">
        <span class="input-group-addon">発注ID</span>
        <input type="text" name="order_id" class="form-control"  value="{{ array_get($request,'order_id','') }}">
      </div>
      <div class="input-group">
        <span class="input-group-addon">発注商品名</span>
        <input type="text" name="product_name" class="form-control"  value="{{ array_get($request,'product_name','') }}">
      </div>
      <div class="input-group">
        <span class="input-group-addon">担当従業員名</span>
        <input type="text" name="employee_name" class="form-control"  value="{{ array_get($request,'employee_name','') }}">
      </div>
      <div class="input-group">
        <span class="input-group-addon">発注日付</span>
        <input type="date" name="order_day_from" class="form-control"  value="{{array_get($request,'order_day_from','') }}">
        <span class="input-group-addon">〜</span>
        <input type="date" name="order_day_to"   class="form-control"  value="{{array_get($request,'order_day_to','') }}">
      </div>
      <div class="input-group">
        <span class="input-group-addon">入荷予定日</span>
        <input type="date" name="arrive_day_from" class="form-control"  value="{{array_get($request,'arrive_day_from','') }}">
        <span class="input-group-addon">〜</span>
        <input type="date" name="arrive_day_to"   class="form-control"  value="{{array_get($request,'arrive_day_to','') }}">
      </div>
      <input class="btn" type="submit" name="search" value="検索">
    </form>
  </div>

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
    @foreach ($order as $value)

      <tr>
        <td>{{$value->order_id}}</td>
        <td>{{$value->orderVendor->vendor_name}}</td>
        <td>{{$value->orderEmployee->user->name}}</td>
        <td>{{$value->orderProduct->product_name}}</td>
        <td>{{$value->order_number}}</td>
        <td>{{$value->order_day}}</td>
        <td>{{$value->arrive_plan}}</td>
        <td>{{$value->remaining_amount}}</td>
      </tr>
    @endforeach
    {{$order->links()}}
  </table>

@endsection
