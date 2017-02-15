@extends('administer/admin_phone_template')

@section('main')

    <h3>商品名:{{$product->product_name}}</h3>
    <p>数量:{{$num}}個</p>
    <p>価格:{{$price}}</p>

    <form aciton="/admin/phone/done" method="post">
        {{csrf_field()}}
        <input type="hidden" name="order_id" value="{{$order->order_id}}">
        <input type="hidden" name="product_id" value="{{$product->product_id}}">
        <input type="hidden" name="num" value="{{$num}}">
        <input type="hidden" name="price" value="{{$price}}">
        <input type="submit" value="確定">
    </form>

@endsection