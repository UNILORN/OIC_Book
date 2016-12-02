@extends('/administer/admin_template')

@section('css','/admin/employee')
@section('title','従業員リスト')
@section('employee','class="active"')

@section('main')

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
      <input class="btn btn-default" type="submit" name="search" value="検索">
    </form>
  </div>

  <table class="table">
    <tr>
      <th>従業員ID</th>
      <th>従業員名</th>
    </tr>
    @foreach ($employee as $key => $value)
      <tr>
        <td>{{$value->employee_id}}</td>
        <td>{{$value->name}}</td>
      </tr>
    @endforeach
    {{$employee->links()}}
  </table>

@endsection
