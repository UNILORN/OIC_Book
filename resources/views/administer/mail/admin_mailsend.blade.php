@extends('/administer/admin_template')

@section('css','/admin/mailsend')
@section('title','発注メールフォーム')
@section('mail','class="active"')

@section('main')

    @if(session()->get('authority') > 1)

        <h1 style="text-align: center">権限がありません</h1>

    @else


        <h1 style="text-align: center">送信完了しました</h1>

    @endif
@endsection