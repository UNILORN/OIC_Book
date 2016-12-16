@extends('/administer/admin_template')

@section('css','/admin/employee')
@section('title','従業員新規作成')
@section('employee','class="active"')

@section('main')
    <h2>従業員新規作成</h2>
    <div class="searchform">
        <form class="search" action="/admin/employee" method="POST">
            {{csrf_field()}}
            <div class="input-group">
                <span class="input-group-addon">従業員ID</span>
                <input type="text" name="employee_id" class="form-control" value="" disabled required>
            </div>
            <div class="input-group">
                <span class="input-group-addon">従業員名</span>
                <input type="text" name="employee_name" class="form-control" value="" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon">パスワード</span>
                <input type="password" name="employee_pass" class="form-control" value="" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon">メールアドレス</span>
                <input type="text" name="employee_email" class="form-control" value="" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon">電話番号</span>
                <input type="text" name="employee_phone_number" class="form-control" value="" required>
            </div>
            <input class="btn btn-default" type="submit" name="search" value="登録">
        </form>
    </div>

@endsection
