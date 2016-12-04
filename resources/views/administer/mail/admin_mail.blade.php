@extends('/administer/admin_template')

@section('css','/admin/mailform')
@section('title','発注メールフォーム')
@section('mail','class="active"')

@section('main')
    <div class="searchform">
        <form class="search" action="/admin/mailform" method="post">
            {{csrf_field()}}
            <div class="input-group">
                <span class="input-group-addon">宛先メールアドレス</span>
                <input type="email" name="email" class="form-control" >
            </div>
            <div class="input-group">
                <span class="input-group-addon">件名</span>
                <input type="text" name="title" class="form-control" value="書籍注文の件" >
            </div>
            <div class="input-group">
                <span class="input-group-addon">本文</span>
                <textarea id="textarea" type="textarea" name="message" class="form-control" style="height:70vh;">
                    ☆発注先名(VENDERより，ORDERのvender_idに対応するvender_name)☆

                    いつもお世話になっております。OIC-Bookです。

                    下記のとおりご注文申し上げますので､
                    ご手配のほどよろしくお願い申し上げます。
                    ***********************************************
                    ･書籍名:☆書籍名(PRODUCTより，ORDERのproduct_idに対応したproduct_name)☆
                    ・著者：☆著者(AUTHERより，ORDERのproduct_idに対応するauther_idに沿ったauther_name)☆
                    ・ISBN：☆ISBN(PRODUCTより，ORDERのproduct_idに対応する13桁のISBN)☆
                    ･部数:☆部数(ORDERより，order_number)☆
                    ･希望納期：☆納期(ORDERより，arrive_plan)☆
                    ***********************************************


                    万一､納期が間に合わない場合は､
                    事前にご連絡くださいますようお願いいたします。

                    ------------------------------------------------------
                    OIC-Book　
                    ☆発注を行った従業員の名前(ORDERより，employee_id)☆
                    〒564-9999
                    大阪府○○市△△町11-9　2F
                    mail：oic.book.sm2@gmail.com
                    ------------------------------------------------------

                </textarea>
            </div>
            <input class="btn btn-default" type="submit" value="送信">
            <input class="btn btn-default" type="reset" value="取り消し">
        </form>
    </div>
@endsection
