@extends('template')
@section('title','buy')
@section('css','buy')
@section('main')


<div class="buy_body">
  <div class="buy_contents">
    <div class="buy_bank">
      <h1>Bank transfer</h1>
    <form class="buy_form" action="{{url('/buy_confirm')}}" method="post">
  {{csrf_field()}}
  <input type="radio" name="buy" value="1">銀行振込<br>
  <input class="submit" type="submit" name="submit" value="購入方法を確定する">
</form>
</div>
<div class="buy_credit">
  <h1>Credit Card</h1>
  <p>coming soon</p>
</div>

</div>
</div>
@endsection
