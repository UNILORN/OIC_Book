@extends('/administer/admin_template')

@section('css','/admin/mailform')
@section('title','発注メールフォーム')
@section('mail','class="active"')

@section('main')
    <div class="searchform">
        <form class="search" action="/admin/mailform" method="post">
            <div class="input-group">
                <span class="input-group-addon">宛先メールアドレス</span>
                <input type="email" name="email" class="form-control" >
            </div>
            <div class="input-group">
                <span class="input-group-addon">タイトル</span>
                <input type="text" name="title" class="form-control" >
            </div>
            <div class="input-group">
                <span class="input-group-addon">本文</span>
                <textarea id="textarea" type="textarea" name="message" class="form-control"></textarea>
            </div>
            <input class="btn btn-default" type="submit" value="送信">
            <input class="btn btn-default" type="reset" value="取り消し">
        </form>
    </div>
@endsection
