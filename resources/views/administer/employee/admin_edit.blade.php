@extends('/administer/admin_template')

@section('css','/admin/employee')
@section('title','従業員編集')
@section('employee','class="active"')

@section('main')
    <h2>従業員編集画面</h2>
    <div class="searchform">
        <form class="search" action="/admin/employee/{{$id}}/update" method="POST">
            {{csrf_field()}}
            <div class="input-group">
                <span class="input-group-addon">従業員ID</span>
                <input type="text" name="employee_id" class="form-control"
                       value="{{ array_get($employee,'employee_id','') }}"　required>
            </div>
            <div class="input-group">
                <span class="input-group-addon">従業員名</span>
                <input type="text" name="employee_name" class="form-control"
                       value="{{array_get($employee,'employee_name','') }}"required>
            </div>
            <div class="input-group">
                <span class="input-group-addon">メールアドレス</span>
                <input type="text" name="employee_email" class="form-control" value="{{array_get($employee,'employee_email','')
            }}"required>
            </div>
            <div class="input-group">
                <span class="input-group-addon">電話番号</span>
                <input type="text" name="employee_phone_number" class="form-control" value="{{array_get($employee,
            'employee_phone_number','')
            }}"required>
            </div>
            <input class="btn btn-default" type="submit" name="search" value="更新">
        </form>
    </div>


@endsection
