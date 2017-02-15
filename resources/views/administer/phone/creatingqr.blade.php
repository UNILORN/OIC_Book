@extends('administer/admin_phone_template')

@section('main')

    <div id="qrcode"></div>

    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="/js/jquery.qrcode.min.js"></script>

    <script type="application/javascript">
        $(window).on("load",function(){
            $('#qrcode').qrcode("{{$order_id}},{{$id}},{{$num}}");
        });
    </script>

@endsection