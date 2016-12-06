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
  <td>{{$user->user_point}}</td>
  @foreach($products as $value)
  <tb>{{ $value->product_name }}</tb>
  <tb>{{ $value->product_price }}</tb>
  <img src="{{ $value->product_image }}" alt="">
  @endforeach
  {{ $sum }}
</tr>
@endsection
