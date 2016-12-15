@extends('/administer/admin_template')

@section('css','/admin/employee')
@section('title','従業員情報')
@section('employee','class="active"')

@section('main')
  <div class="row container">
    <div class="col-md-11"></div>
    <div class="col-md-1 right">
      <button class="btn btn-default" type="button" onclick="location.href='/admin/employee/create'">新規登録</button>
    </div>
  </div>
  <div class="searchform">
    <form class="search" action="/admin/employee" method="GET">
      <div class="input-group">
        <span class="input-group-addon">従業員ID</span>
        <input type="text" name="employee_id" class="form-control"  value="{{ array_get($request,'employee_id','') }}">
      </div>
      <div class="input-group">
        <span class="input-group-addon">従業員名</span>
        <input type="text" name="employee_name" class="form-control"  value="{{array_get($request,'employee_name','') }}">
      </div>
      <div class="input-group">
        <span class="input-group-addon">従業員メールアドレス</span>
        <input type="text" name="employee_email" class="form-control"  value="{{array_get($request,'employee_email','') }}">
      </div>
      <input class="btn btn-default" type="submit" name="search" value="検索">
    </form>
  </div>

  <table class="table">
    <tr>
      <th>従業員ID</th>
      <th>従業員名</th>
      <th>従業員メールアドレス</th>
      <th>従業員電話番号</th>
      <th>従業員詳細</th>
    </tr>
    @foreach ($employee as $key => $value)
      <tr>
        <td>{{$value->employee_id}}</td>
        <td>{{$value->employee_name}}</td>
        <td>{{$value->employee_email}}</td>
        <td>{{$value->employee_phone_number}}</td>
        <td>
          <button class="btn btn-default" type="button" name="button" onclick="location
                  .href='/admin/employee/{{$value->employee_id}}'">従業員詳細</button>
        </td>
      </tr>
    @endforeach
    {{$employee->appends($request->toArray())->links()}}
  </table>

@endsection
