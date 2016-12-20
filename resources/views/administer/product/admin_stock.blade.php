@extends('/administer/admin_template')

@section('css','/admin/product/stock')
@section('title','商品情報')
@section('stock','class="active"')

@section('main')
    <div class="row container">
        <div class="col-md-11"></div>
        <div class="col-md-1 right">
            <button class="btn btn-default" type="button" onclick="location.href='/admin/stock/create'">新規登録</button>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red">いずれかの値が間違っています。</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="searchform">

        <form class="search" action="/admin/stock" method="GET">
            <div class="input-group">
                <span class="input-group-addon">商品ID</span>
                <input type="text" name="product_id" class="form-control" value="{{ array_get($request,'product_id','') }}">
            </div>
            <div class="input-group">
                <span class="input-group-addon">商品名称</span>
                <input type="text" name="product_name" class="form-control" value="{{array_get($request,'product_name','') }}">
            </div>
            <div class="input-group">
                <span class="input-group-addon">商品価格</span>
                <input type="text" name="product_price_from" class="form-control" value="{{array_get($request,'product_price_from','') }}">
                <span class="input-group-addon">〜</span>
                <input type="text" name="product_price_to" class="form-control" value="{{array_get($request,'product_price_to','') }}">
            </div>
            <input class="btn btn-default" type="submit" name="search" value="検索">
        </form>
    </div>
    <table class="table">
        <tr>
            <th>商品ID</th>
            <th>商品名称</th>
            <th>価格</th>
            <th>在庫数（個）</th>
            <th>商品編集</th>
        </tr>
        @foreach ($products as $key => $value)
            <tr>
                <td>{{$value->product_id}}</td>
                <td>{{$value->product_name}}</td>
                <td>{{$value->product_price}}</td>
                <td>{{$value->product_stock}}個
                    <div class="progress">
                        <div class="progress-bar
                        @foreach($progress as $key => $progressvalue)
                            @if($value->product_stock/$maxstock*100 > $key)
                                {{$progressvalue}}
                                @break
                            @endif
                        @endforeach
                                " role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{round($value->product_stock/$maxstock*100,1)}}%;">
                            {{round($value->product_stock/$maxstock*100,1)}} %
                        </div>
                    </div>
                </td>
                <td>
                    <button class="btn btn-default" type="button" name="button" onclick="location.href='/admin/stock/{{$value->product_id}}'">商品詳細</button>
                </td>
            </tr>
        @endforeach
        {{$products->appends($request->toArray())->links()}}
    </table>
@endsection
