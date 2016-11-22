@extends('template')
@section('title','buy')


@section('main')
<form class="buy_form" action="{{url('/buy_confirm')}}" method="post">
  <input type="radio" name="name" value="">銀行振込
  <input type="submit" name="name" value="購入方法を確定する">
</form>
@endsection
