@extends('/administer/admin_template')

@section('css','/admin/employee')
@section('title','仕入先新規作成')
@section('vendor','class="active"')

@section('main')
    <h2>仕入先新規作成</h2>
    <form class="search" action="/admin/vendor/create" method="POST">
        {{csrf_field()}}
        <div class="input-group">
            <span class="input-group-addon">仕入先ID</span>
            <input type="text" name="vendor_id" class="form-control" value="{{ array_get($vendor,'vendor_id','') }}" required>
        </div>
        <div class="input-group">
            <span class="input-group-addon">仕入先名</span>
            <input type="text" name="vendor_name" class="form-control" value="{{array_get($vendor,'vendor_name','')
            }}"  required>
        </div>
        <div class="input-group">
            <span class="input-group-addon">メールアドレス</span>
            <input type="text" name="vendor_email" class="form-control" value="{{array_get($vendor,'vendor_email','')
            }}" required>
        </div>
        <div class="input-group">
            <span class="input-group-addon">住所</span>
            <input type="text" name="vendor_address" class="form-control" value="{{array_get($vendor,'vendor_address',
            '') }}" required>
        </div>
        <div class="input-group">
            <span class="input-group-addon">電話番号</span>
            <input type="text" name="vendor_phone_number" class="form-control" value="{{array_get($vendor,
            'vendor_phone_number','')
            }}" required>
        </div>
        <input class="btn btn-default" type="submit" name="search" value="登録">
        <input class="btn btn-default" type="clear" value="クリア">
    </form>


@endsection
