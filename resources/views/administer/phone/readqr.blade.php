@extends('administer/admin_phone_template')

@section('main')

    <script src="https://code.jquery.com/jquery-1.7.2.min.js"
            integrity="sha256-R7aNzoy2gFrVs+pNJ6+SokH04ppcEqJ0yFLkNGoFALQ="
            crossorigin="anonymous"></script>

    <script type="text/javascript" src="/js/grid.js"></script>
    <script type="text/javascript" src="/js/version.js"></script>
    <script type="text/javascript" src="/js/detector.js"></script>
    <script type="text/javascript" src="/js/formatinf.js"></script>
    <script type="text/javascript" src="/js/errorlevel.js"></script>
    <script type="text/javascript" src="/js/bitmat.js"></script>
    <script type="text/javascript" src="/js/datablock.js"></script>
    <script type="text/javascript" src="/js/bmparser.js"></script>
    <script type="text/javascript" src="/js/datamask.js"></script>
    <script type="text/javascript" src="/js/rsdecoder.js"></script>
    <script type="text/javascript" src="/js/gf256poly.js"></script>
    <script type="text/javascript" src="/js/gf256.js"></script>
    <script type="text/javascript" src="/js/decoder.js"></script>
    <script type="text/javascript" src="/js/qrcode.js"></script>
    <script type="text/javascript" src="/js/findpat.js"></script>
    <script type="text/javascript" src="/js/alignpat.js"></script>
    <script type="text/javascript" src="/js/databr.js"></script>
    <script type="text/javascript" src="/js/qr.js"></script>
    <script type="text/javascript" src="/js/camera.js"></script>
    <script type="text/javascript" src="/js/init.js"></script>

    <h1>JSQRCode Scanner</h1>
    <p>Hold a QR Code in front of your webcam.</p>
    <video  id="camsource" autoplay width="320" height="240">Put your fallback message here.</video>
    <canvas id="qr-canvas" width="320" height="240" style="display:none"></canvas>
    <h3 id="qr-value"></h3>

@endsection