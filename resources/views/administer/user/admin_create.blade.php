@extends('/administer/admin_template')

@section('css','/admin/user')
@section('title','ユーザ新規作成')
@section('user','class="active"')

@section('main')
    <h2>ユーザ新規作成</h2>
    <div class="searchform">
        <form class="search" action="/admin/user" method="POST">
            {{csrf_field()}}
            <div class="input-group">
                <span class="input-group-addon">ユーザID</span>
                <input type="text" name="user_id" class="form-control" value="" disabled required>
            </div>
            <div class="input-group">
                <span class="input-group-addon">ユーザ名</span>
                <input type="text" name="user_name" class="form-control" value="" required>
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
                <span class="input-group-addon">パスワード</span>
                <input type="password" name="user_pass" class="form-control" value="" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon">メールアドレス</span>
                <input type="text" name="user_email" class="form-control" value="" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon">電話番号</span>
                <input type="text" name="user_phone_number" class="form-control" value="" required>
            </div>
            <input class="btn btn-default" type="submit" name="search" value="登録">
        </form>
    </div>

@endsection
