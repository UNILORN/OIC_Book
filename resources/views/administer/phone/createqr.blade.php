@extends('administer/admin_phone_template')

@section('main')

<table class="table">
    <tr>
        <th>仕入先名</th>
        <th>発注商品名</th>
        <th>数量</th>
        <th>発注日付</th>
        <th>入荷予定日</th>
        <th>注文残量</th>
        <th>QR生成</th>
    </tr>
    @foreach ($order as $value)

        <tr>
            <td>{{$value->orderVendor->vendor_name}}</td>
            <td>{{$value->orderProduct->product_name}}</td>
            <td>{{$value->order_number}}</td>
            <td>{{$value->order_day}}</td>
            <td>{{$value->arrive_plan}}</td>
            <td>{{$value->remaining_amount}}</td>
            <td>
                <form method="post" action="createqr">
                    {{csrf_field()}}

                    <input type="hidden" name="product_id" value="{{$value->product_id}}">
                    <input type="hidden" name="order_id" value="{{$value->order_id}}">
                    <input type="number" name="num" value="0" max="{{(int)$value->order_number - (int)$value->remaining_amount}}">
                    <input type="submit" value="生成">
                </form>
            </td>
        </tr>
    @endforeach
</table>

@endsection