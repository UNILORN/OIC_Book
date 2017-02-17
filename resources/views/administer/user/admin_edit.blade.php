@extends('/administer/admin_template')

@section('css','/admin/user')
@section('title','ユーザ編集')
@section('user','class="active"')

@section('main')
    <h2>ユーザ編集画面</h2>
    <div class="searchform">
        <form class="search" action="/admin/user/{{$id}}/update" method="POST">
            {{csrf_field()}}
            <div class="input-group">
                <span class="input-group-addon">ユーザID</span>
                <input type="text" name="user_id" class="form-control"
                       value="{{ array_get($user,'id','') }}"disabled>
            </div>
            <div class="input-group">
                <span class="input-group-addon">ユーザ名</span>
                <input type="text" name="user_name" class="form-control"
                       value="{{array_get($user,'name','') }}"required>
            </div>
            <div class="input-group">
                <span class="input-group-addon">郵便番号</span>
                <input type="text" name="user_postcode" class="form-control" value="{{array_get($user,'user_post_code','')}}"required>
            </div>
            <div class="input-group">
                <span class="input-group-addon">住所</span>
                <input type="text" name="user_address" class="form-control" value="{{array_get($user,'user_address','')}}"required>
            </div>
            <div class="input-group">
                <span class="input-group-addon">メールアドレス</span>
                <input type="text" name="user_email" class="form-control" value="{{array_get($user,'email','')
            }}"required>
            </div>
            <div class="input-group">
                <span class="input-group-addon">電話番号</span>
                <input type="text" name="user_phone_number" class="form-control" value="{{array_get($user,
            'user_phone_number','')
            }}"required>
            </div>
            <input class="btn btn-default" type="submit" name="search" value="更新">
        </form>
    </div>


@endsection
