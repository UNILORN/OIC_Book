@extends('/administer/admin_template')

@section('css','/admin/employee')
@section('title','従業員リスト')

@section('main')
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

  </table>

@endsection
