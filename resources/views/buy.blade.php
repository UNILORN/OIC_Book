@extends('template')
@section('title','buy')


@section('main')
<form class="buy_form" action="{{url('/buy_confirm')}}" method="post">
  {{csrf_field()}}
  <input type="radio" name="buy" value="1">銀行振込
  <input type="submit" name="submit" value="購入方法を確定する">
</form>
@endsection
