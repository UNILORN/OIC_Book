@extends('/administer/admin_template')

@section('css','/admin/mailform')
@section('title','発注メールフォーム')
@section('mail','class="active"')

@section('main')
    <?php
    if(session()->get('authority') > 1) {
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/admin');
        exit;
    }
    ?>

    <div class="searchform">
        <form class="search" action="/admin/mailform" method="post">
            {{csrf_field()}}
            <div class="input-group">
                <span class="input-group-addon">宛先メールアドレス</span>
                <input type="email" name="email" class="form-control" placeholder="発注先メールアドレス" value="{{$vendor->vendor_email}}">
            </div>
            <div class="input-group">
                <span class="input-group-addon">件名</span>
                <input type="text" name="title" class="form-control" value="{{$title}}" placeholder="件名" disabled>
            </div>
            <div class="input-group">
                <span class="input-group-addon">この本文が送信されます</span>
                <textarea id="textarea" type="textarea" name="message" class="form-control" style="height:60vh;">
{{$vendor->vendor_name}}様
いつもお世話になっております。OIC-Bookです

下記のとおりご注文申し上げますので
ご手配のほどよろしくお願い申し上げます

**********************************************
･書籍名：{{$product->product_name}}
･著者：
･ISBN：{{$product->ISBN}}
･部数：{{$num}}
･希望納期：{{$date}}
**********************************************

万一､納期が間に合わない場合は
事前にご連絡くださいますようお願いいたします

-----------------------------------------------------
OIC-Book
〒564-999
大阪府○○市△△町11-9　2
mail：oic.book.sm2@gmail.co.jp
------------------------------------------------------
                </textarea>
            </div>
            <input type="hidden" name="vendor_id" value="{{$vendor->vendor_id}}">
            <input type="hidden" name="vendor_name" value="{{$vendor->vendor_name}}">
            <input type="hidden" name="product_id" value="{{$product->product_id}}">
            <input type="hidden" name="product_name" value="{{$product->product_name}}">
            <input type="hidden" name="ISBN" value="{{$product->ISBN}}">
            <input type="hidden" name="num" value="{{$num}}">
            <input type="hidden" name="date" value="{{$date}}">
            <input class="btn btn-default" type="submit" value="送信">
            <button class="btn btn-default" type="button" onclick="location.href='/admin/mailform'">戻る</button>
        </form>
    </div>
@endsection
