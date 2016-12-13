@extends('template')
@section('title','購入画面')
@section('css','buy')
@section('main')


<div class="buy_body">
  <div class="buy_contents">
    <div class="buy_bank">
      <h1>Bank transfer</h1>
    <form class="buy_form" action="{{url('/buy_confirm')}}" method="post">
  {{csrf_field()}}
  <input type="radio" name="buy" value="1" checked>OIC銀行
  <p>※振込先はOIC銀行のみとなります。<br>
    他社銀行からのお振込の場合、振込手数料がかかる場合がりますので、ご了承くださいませ。</p>
  <input class="submit" type="submit" name="submit" value="確定">
</form>
</div>
<div class="buy_credit">
  <h1>Credit Card</h1>
  <p>coming soon</p>
</div>

</div>
</div>
@endsection
