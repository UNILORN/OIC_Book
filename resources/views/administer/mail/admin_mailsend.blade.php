@extends('/administer/admin_template')

@section('css','/admin/mailsend')
@section('title','発注メールフォーム')
@section('mail','class="active"')

@section('main')
    <?php
    if(session()->get('authority') > 1) {
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/admin');
        exit;
    }
    ?>

    <h1 style="text-align: center">送信完了しました</h1>
@endsection