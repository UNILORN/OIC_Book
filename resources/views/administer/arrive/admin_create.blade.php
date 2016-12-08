@extends('/administer/admin_template')

@section('css','/admin/product/edit')
@section('title','入荷登録')
@section('arriveform','class="active"')

@section('main')

    <h2>入荷登録フォーム</h2>
    <form class="form-horizontal" action="/admin/arrive/product" method="get" style="margin-bottom: 20px;">
        <div class="input-group">
            <span class="input-group-addon">商品ID</span>
            <input type="text" name="product_id" class="form-control"
                   value="{{array_get($request,'product_id','')}}" @if(!empty($product)) disabled @endif>
        </div>
        <div class="input-group">
            <span class="input-group-addon">商品名</span>
            <input type="text" name="product_name" class="form-control"
                   value="{{array_get($request,'product_name','')}}" @if(!empty($product)) disabled @endif>
        </div>
        <div class="input-group">
            <span class="input-group-addon">ISBN</span>
            <input type="text" name="ISBN" class="form-control" value="{{array_get($request,'ISBN','')}}"
                   @if(!empty($product)) disabled @endif>
        </div>
        <a href="/admin/arrive/create">
            <button type="button" class="btn btn-default">クリア</button>
        </a>
        <input class="btn btn-default" type="submit" name="submit" value="検索">
    </form>
    <table class="table">
        <tr>
            <th>発注企業</th>
            <th>商品名</th>
            <th>入荷残量</th>
        </tr>
        @foreach ($order as $key => $value)
            <tr>
                <td>{{$value->orderVendor->vendor_name}}</td>
                <td>{{$value->orderProduct->product_name}}</td>
                <td>{{$value->remaining_amount}}</td>
            </tr>
        @endforeach
    </table>
    <form class="form-horizontal " action="/admin/arrive" method="post">
        {{csrf_field()}}
        <div class="input-group">
            <span class="input-group-addon">発注企業：商品名</span>
            <select class="form-control" name="order_id" id="store">

                @foreach($order as $value)
                    <option value="{{$value->order_id}}">{{$value->orderVendor->vendor_name}}
                        : {{$value->orderProduct->product_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="input-group">
            <span class="input-group-addon">個数</span>
            <input type="text" name="arrive_number" class="form-control"
                   value="{{array_get($request,'arrive_number','')}}" required>
        </div>
        <div class="input-group">
            <span class="input-group-addon">入荷価格</span>
            <input type="number" name="arrive_price" class="form-control" value="" required>
        </div>
        <div class="input-group">
            <span class="input-group-addon">入荷日時</span>
            <input type="date" name="arrive_day" class="form-control" value="{{date("Y-m-d")}}" required disabled>
        </div>
        <input class="btn btn-default" type="submit" name="submit" value="登録">
    </form>

@endsection
