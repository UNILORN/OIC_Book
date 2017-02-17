@extends('administer/admin_phone_template')

@section('main')

    <a href="/admin/readqr"><button type="button" class="btn btn-default btn-lg btn-block">QRコードを読み取る</button></a>
    <a href="/admin/createqr"><button type="button" class="btn btn-default btn-lg btn-block">QRコードを生成する</button></a>


@endsection