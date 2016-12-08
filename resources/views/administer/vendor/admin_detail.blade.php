@extends('/administer/admin_template')

@section('css','/admin/employee')
@section('title','仕入先')
@section('vendor','class="active"')

@section('main')
    <h2>仕入先編集画面</h2>
    <form class="search" action="/admin/vendor/{{$id}}/delete" method="POST">
        {{csrf_field()}}
        <div class="input-group">
            <span class="input-group-addon">仕入先ID</span>
            <input type="text" name="vendor_id" class="form-control" value="{{ array_get($vendor,'vendor_id','') }}" disabled>
        </div>
        <div class="input-group">
            <span class="input-group-addon">仕入先名</span>
            <input type="text" name="vendor_name" class="form-control" value="{{array_get($vendor,'vendor_name','') }}" disabled>
        </div>
        <div class="input-group">
            <span class="input-group-addon">メールアドレス</span>
            <input type="text" name="vendor_email" class="form-control" value="{{array_get($vendor,'vendor_email','')
            }}" disabled>
        </div>
        <div class="input-group">
            <span class="input-group-addon">住所</span>
            <input type="text" name="vendor_address" class="form-control" value="{{array_get($vendor,'vendor_address',
            '') }}" disabled>
        </div>
        <div class="input-group">
            <span class="input-group-addon">電話番号</span>
            <input type="text" name="vendor_phone_number" class="form-control" value="{{array_get($vendor,
            'vendor_phone_number','')
            }}" disabled>
        </div>
        <input class="btn btn-default" type="button" name="search" value="編集" onclick="location
        .href='/admin/vendor/{{$id}}/edit'">
        <input class="btn btn-danger" type="submit" name="delete" value="削除">
    </form>



@endsection