@extends('/administer/admin_template')


@section('title', 'Top')
@section('css','admin/admin_top')
@section('main')

    <?php

    $ua=$_SERVER['HTTP_USER_AGENT'];
    if((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'Android')!==false)) {
        header('Location:/admin/phone');
        exit();
    }

    ?>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <h3 class="content_title">売上</h3>
    <div class="row">
        <div class="graf col-sm-6" id="genre_sales">
            <div class="loading">
                <i class="material-icons">loop</i>
            </div>
            <p class="loading-text">Now Loading...</p>
        </div>

        <div class="graf col-sm-6" id="monthly_sales">
            <div class="loading">
                <i class="material-icons">loop</i>
            </div>
            <p class="loading-text">Now Loading...</p>
        </div>
    </div>

    <h3 class="content_title">商品</h3>
    <div class="row">
        
    </div>
    <script src="/js/admin/top.js"></script>
@endsection

