@extends('template')
@section('title','商品詳細')
@section('css','detail')

@section('main')
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <div class="product_link">
        <a href="/">TOP</a> > <a href="search">商品一覧</a> > <a href="/detail?product_id={{$product->product_id}}">商品詳細</a>
    </div>
    <div class="product_content">

        <div class="product_img">
            <div class="product_img_inner"
                 style="background-image: url('{{$product->product_image}}');">
            </div>
        </div>
        <div class="product_text">
            <h1 class="product_title">{{$product->product_name}}</h1>
            <p>{{$product->productGenre["category"]}}</p>
            <p class="price">￥{{$product->product_price}}</p>

            @if(Auth::check())
                <div class="cart-form">
                    <form action="/addauthcart" method="post">
                      @if(!$product->product_stock <= 0)
                        <div class="cart-num">
                            <select name="number" class="form-select hasCustomSelect">
                                @foreach (range(1,$product->product_stock) as $key => $value)
                                    <option value="{{$value}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="product_id" value="{{$product->product_id}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="cart-submit">
                              <input type="submit" value="カートに入れる" @if($product->product_stock <= 0) disabled @endif>
                        @else
                          <p>在庫がありません</p>
                        @endif
                        </div>
                    </form>
                </div>
            @else
                <div class="cart-form">
                    <form action="/addsessioncart" method="post">
                        <div class="cart-num">
                            <input type="number" min="0" max="{{$product->product_stock}}" name="number" class="form-control" id="exampleInputName2" placeholder="0">
                                {{--
                                @foreach (range(1,$product->product_stock) as $key => $value)
                                    <option value="{{$value}}">{{$value}}</option>
                                @endforeach
                                --}}
                        </div>
                        <input type="hidden" name="product_id" value="{{$product->product_id}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="cart-submit">
                            <input type="submit" value="カートに入れる" @if($product->product_stock <= 0) disabled @endif>
                        </div>
                    </form>
                </div>
            @endif
            <p><b>アイテム説明</b></p>
            <p>{{$product->product_explanation}}</p>
        </div>
    </div>


    <div class="review_background">
        <div id="review">
          <div v-for="review in display_reviews">
            <div class="reviewer">投稿者：@{{review.review_users[0].name}}</div>
            <div class="posted_date">@{{review.entry_time}}</div>
            <div class="stars" v-for="n in review.review">☆</div>
            <div class="posted_text">@{{review.review_text}}</div>
          </div>
          <button class="more" @click="displayReviews" v-if="more">もっと見る</button>
        </div>
        @if(Auth::check())
            <div class="addreview">
                <button class="display_review_form">レビューを書く</button>
                <form class="review_form" action="/addreview" method="post">
                    評価：<input type="number" name="star" value="" min="1" max="5">
                    <input type="text" name="text" value="">
                    <input type="hidden" name="product_id" value="{{$product->product_id}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" name="some_name" value="送信">
                </form>
            </div>
    </div>
    @endif

    <script src="/js/detail/review.js" charset="utf-8"></script>
@endsection
