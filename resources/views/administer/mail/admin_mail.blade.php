@extends('/administer/admin_template')

@section('css','/admin/mailform')
@section('title','発注メールフォーム')
@section('mail','class="active"')

@section('main')
    <div class="searchform">
        <form class="search" action="/admin/mailformdetail" method="post">
            {{csrf_field()}}
            <div class="input-group">
                <span class="input-group-addon">発注先企業名</span>
                <select name="vendor" class="form-control" required>
                    @foreach($vendor as $value)
                        <option value="{{$value->vendor_id}}">{{$value->vendor_id}} : {{$value->vendor_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group">
                <span class="input-group-addon">件名</span>
                <input type="text" name="title" class="form-control" placeholder="件名" value="書籍注文の件" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon">商品名</span>
                <select name="product" class="form-control" required>
                    @foreach($product as $value)
                        <option value="{{$value->product_id}}">{{$value->product_id}} : {{$value->product_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group">
                <span class="input-group-addon">部数</span>
                <input type="number" name="num" class="form-control" placeholder="部数" min="0" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon">納期希望日</span>
                <input type="date" name="date" class="form-control" placeholder="納期" required>
            </div>
            <input class="btn btn-default" type="submit" value="確認画面へ進む">
            <input class="btn btn-default" type="reset" value="取り消し">
        </form>
    </div>
@endsection
