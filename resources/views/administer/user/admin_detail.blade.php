@extends('/administer/admin_template')

@section('css','/admin/employee')
@section('title','ユーザ詳細')
@section('user','class="active"')

@section('main')
    <h2>ユーザ詳細画面</h2>
    <div class="searchform">
        <form class="search" action="/admin/user/{{$id}}/delete" method="POST">
            {{csrf_field()}}
            <div class="input-group">
                <span class="input-group-addon">ユーザID</span>
                <input type="text" name="user_id" class="form-control" value="{{ array_get($user,'user_id','') }}"
                       disabled>
            </div>
            <div class="input-group">
                <span class="input-group-addon">ユーザ名</span>
                <input type="text" name="user_name" class="form-control"
                       value="{{array_get($user,'user_name','') }}" disabled>
            </div>
            <div class="input-group">
                <span class="input-group-addon">郵便番号</span>
                <input type="text" name="user_postcode" class="form-control" value="" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon">住所</span>
                <input type="text" name="user_address" class="form-control" value="" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon">メールアドレス</span>
                <input type="text" name="user_email" class="form-control" value="{{array_get($user,'user_email','')
            }}" disabled>
            </div>
            <div class="input-group">
                <span class="input-group-addon">電話番号</span>
                <input type="text" name="user_phone_number" class="form-control" value="{{array_get($user,
            'user_phone_number','')
            }}" disabled>
            </div>
            <input class="btn btn-default" type="button" name="search" value="編集" onclick="location
                    .href='/admin/user/{{$id}}/edit'">
            <input class="btn btn-danger" type="submit" name="delete" value="削除">
        </form>
    </div>


@endsection