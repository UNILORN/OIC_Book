@extends('/administer/admin_template')

@section('css','/admin/employee')
@section('title','仕入先')
@section('vendor','class="active"')

@section('main')
<div class="searchform">
    <form class="search" action="/admin/vendor" method="GET">
        <div class="input-group">
            <span class="input-group-addon">仕入先ID</span>
            <input type="text" name="id" class="form-control"  value="{{ array_get($request,'id','') }}">
        </div>
        <div class="input-group">
            <span class="input-group-addon">仕入先名</span>
            <input type="text" name="name" class="form-control"  value="{{array_get($request,'name','') }}">
        </div>
        <div class="input-group">
            <span class="input-group-addon">電話番号</span>
            <input type="text" name="tel" class="form-control"  value="{{array_get($request,'tel','') }}">
        </div>

        <input class="btn btn-default" type="submit" name="search" value="検索">
    </form>
</div>

<table class="table">
    <tr>
        <th>仕入先ID</th>
        <th>仕入先名</th>
        <th>メールアドレス</th>
        <th>住所</th>
        <th>電話番号</th>
    </tr>
    @foreach ($vendor as $key => $value)
    <tr>
        <td>{{$value->vendor_id}}</td>
        <td>{{$value->vendor_name}}</td>
        <td>{{$value->vendor_email}}</td>
        <td>{{$value->vendor_address}}</td>
        <td>{{$value->vendor_phone_number}}</td>
    </tr>
    @endforeach
    {{$vendor->appends($request->toArray())->links()}}
</table>

@endsection
