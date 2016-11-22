@extends('template')
@section('title','buy_confirm')


@section('main')
<tr>
  <td>{{ $buy }}</td>
  <td>{{ $user->name }}</td>
  <td>{{$user->email}}</td>
  <td>{{$user->user_post_code}}</td>
  <td>{{$user->user_address}}</td>
  <td>{{$user->user_phone_number}}</td>
  <td>{{$user->point}}</td>
</tr>
@endsection
