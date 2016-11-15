@extends('template')
@section('title','products')


@section('main')
  <ul>
    @foreach ($products as $product)
      <li>{{ $product->product_id }}</li>
    @endforeach
  </ul>
@endsection
