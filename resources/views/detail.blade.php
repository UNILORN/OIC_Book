@extends('template')
@section('title','detail')


@section('main')
  <a href="/cart?id={{$product->product_id}}">cartに追加</a>
  {{$product}}
@endsection
