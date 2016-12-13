@extends('/administer/admin_template')

@section('css','/admin/employee')
@section('title','従業員新規作成')
@section('employee','class="active"')

@section('main')
    <h2>従業員新規作成</h2>
    <div class="searchform">
        <form class="search" action="/admin/employee/create" method="POST">
            {{csrf_field()}}
            <div class="input-group">
                <span class="input-group-addon">仕入先ID</span>
                <input type="text" name="employee_id" class="form-control" value="" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon">仕入先名</span>
                <input type="text" name="employee_name" class="form-control" value="" required>
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
