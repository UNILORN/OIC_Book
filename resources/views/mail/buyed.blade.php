
<header>
<h5>{{Auth::user()['attributes']['name']}} 様</h5>

oicbookをご利用いただき、ありがとうございます。oicbookがお客様のご注文を承ったことをお知らせいたします。
詳細は<a href="http://oicbook.herokuapp.com/buyhistory">購入履歴</a>からご確認ください。
</header>

<p>注文内容</p>

@foreach($products as $product)
    <div>
        <img src="{{$message->embed($product['attributes']['product_image'])}}">
        <p>商品名 : {{$product['attributes']['product_name']}}</p>
        <p>数量 : {{$product['attributes']['product_order_number']}}</p>
    </div>
@endforeach