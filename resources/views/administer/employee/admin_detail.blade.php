@extends('/administer/admin_template')

@section('css','/admin/employee')
@section('title','従業員詳細')
@section('employee','class="active"')

@section('main')
    <h2>従業員詳細画面</h2>
    <div class="searchform">
        <form class="search" action="/admin/employee/{{$id}}/delete" method="POST">
            {{csrf_field()}}
            <div class="input-group">
                <span class="input-group-addon">従業員ID</span>
                <input type="text" name="employee_id" class="form-control" value="{{ array_get($employee,'employee_id','') }}"
                       disabled>
            </div>
            <div class="input-group">
                <span class="input-group-addon">従業員名</span>
                <input type="text" name="employee_name" class="form-control"
                       value="{{array_get($employee,'employee_name','') }}" disabled>
            </div>
            <div class="input-group">
                <span class="input-group-addon">メールアドレス</span>
                <input type="text" name="employee_email" class="form-control" value="{{array_get($employee,'employee_email','')
            }}" disabled>
            </div>
            <div class="input-group">
                <span class="input-group-addon">電話番号</span>
                <input type="text" name="employee_phone_number" class="form-control" value="{{array_get($employee,
            'employee_phone_number','')
            }}" disabled>
            </div>
            <input class="btn btn-default" type="button" name="search" value="編集" onclick="location
                    .href='/admin/employee/{{$id}}/edit'">
            <input class="btn btn-danger" type="submit" name="delete" value="削除">
        </form>
    </div>


@endsection