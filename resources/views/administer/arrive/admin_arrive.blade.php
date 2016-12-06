@extends('/administer/admin_template')
@section('css','/admin/employee')
@section('title','入荷情報')
@section('arrive','class="active"')

@section('main')

    <div class="searchform">
        <form class="search" action="/admin/arrive" method="GET">
            <div class="input-group">
                <span class="input-group-addon">入荷ID</span>
                <input type="text" name="arrive_id" class="form-control"  value="{{ array_get($request,'arrive_id','') }}">
            </div>
            <div class="input-group">
                <span class="input-group-addon">発注ID</span>
                <input type="text" name="order_id" class="form-control"  value="{{array_get($request,'order_id','') }}">
            </div>
            <div class="input-group">
                <span class="input-group-addon">入荷予定日</span>
                <input type="date" name="arrive_plan_from" class="form-control"  value="{{array_get($request,'arrive_plan_from','') }}">
                <span class="input-group-addon">〜</span>
                <input type="date" name="arrive_plan_to" class="form-control"  value="{{array_get($request,'arrive_plan_to','') }}">
            </div>
            <div class="input-group">
                <span class="input-group-addon">入荷日</span>
                <input type="date" name="arrive_day_from" class="form-control"  value="{{array_get($request,'arrive_day_from','') }}">
                <span class="input-group-addon">〜</span>
                <input type="date" name="arrive_day_to" class="form-control"  value="{{array_get($request,'arrive_day_to','') }}">
            </div>
            <input class="btn btn-default" type="submit" name="search" value="検索">
        </form>
    </div>

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
        <td>{{$value->arriveOrder["arrive_plan"]}}</td>
        <td>{{$value->arrive_day}}</td>
        <td>{{$value->arriveOrder["orderProduct"]["product_name"]}}</td>
        <td>{{$value->arrive_number}}</td>
        <td>{{$value->arrive_price}}</td>
      </tr>
    @endforeach
    {{$arrive->appends($request->toArray())->links()}}
  </table>

@endsection
