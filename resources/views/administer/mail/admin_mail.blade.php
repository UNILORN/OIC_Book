@extends('/administer/admin_template')

@section('css','/admin/mailform')
@section('title','発注メールフォーム')
@section('mail','class="active"')

@section('main')
    <form action="/admin/mailform" method="post">
        {!! csrf_field() !!}
        宛先メールアドレス:<input type="email" name="email">
        タイトル:<input type="text" name="title">
        本文:<input type="text" name="message">
        <input type="submit" value="送信">
        <input type="reset" value="取り消し">
    </form>
@endsection
