@extends('administer/admin_phone_template')

@section('main')
    <div style="
    position: relative;
    height: 200px;
    width: 300px;
    border: none;">
    <div id="qrcode"
    style=" border: none;
    width: 150px;
    height: 50px;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    position: absolute;
    margin: auto;"></div>
    </div>

    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="/js/jquery.qrcode.min.js"></script>

    <script type="application/javascript">
        $(window).on("load",function(){
            $('#qrcode').qrcode("{{$order_id}},{{$id}},{{$num}}");
        });
    </script>

@endsection