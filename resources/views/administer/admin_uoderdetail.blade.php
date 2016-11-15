@extends('/administer/admin_template')

@section('css','/admin/uorder_detail')
@section('title', 'uorderdetail')

@section('main')
<div class="all">

<div id="sales_search">
  <a href="#"><li>全体売上</li></a>
  <a href="#"><li>商品ごとの売上</li></a>
  <a href="#"><li>期間ごとの売上</li></a>
</div>

<ul class="column_name">
  <li>購入日時</li>
  <li>商品名</li>
</ul>


@foreach ($sales as $sale)
  @if ($sale->uorderDetail[0]->uorder_payment)
  <div>
    {{$sale->uorderDetail[0]->uorder_day}}
    {{$sale->uorderProduct[0]->product_name}}
  </div>
  @endif
@endforeach

</div>

@endsection
