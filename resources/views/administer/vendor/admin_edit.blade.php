@extends('/administer/admin_template')

@section('css','/admin/employee')
@section('title','仕入先編集')
@section('vendor','class="active"')

@section('main')
    <h2>仕入先編集画面</h2>
    <div class="searchform">
        <form class="search" action="/admin/vendor/{{$id}}/update" method="POST">
            {{csrf_field()}}
            <div class="input-group">
                <span class="input-group-addon">仕入先ID</span>
                <input type="text" name="vendor_id" class="form-control"
                       value="{{ array_get($vendor,'vendor_id','') }}">
            </div>
            <div class="input-group">
                <span class="input-group-addon">仕入先名</span>
                <input type="text" name="vendor_name" class="form-control"
                       value="{{array_get($vendor,'vendor_name','') }}">
            </div>
            <div class="input-group">
                <span class="input-group-addon">メールアドレス</span>
                <input type="text" name="vendor_email" class="form-control" value="{{array_get($vendor,'vendor_email','')
            }}">
            </div>
            <div class="input-group">
                <span class="input-group-addon">住所</span>
                <input type="text" name="vendor_address" class="form-control" value="{{array_get($vendor,'vendor_address',
            '') }}">
            </div>
            <div class="input-group">
                <span class="input-group-addon">電話番号</span>
                <input type="text" name="vendor_phone_number" class="form-control" value="{{array_get($vendor,
            'vendor_phone_number','')
            }}">
            </div>
            <input class="btn btn-default" type="submit" name="search" value="更新">
        </form>
    </div>


@endsection
