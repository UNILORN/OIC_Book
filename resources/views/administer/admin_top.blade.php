@extends('/administer/admin_template')


@section('title', 'Top')
@section('css','admin/admin_top')
@section('main')
    <div class="content">
        <h3 class="content_title">売上</h3>
        <div id="stage"></div>
    </div>
    <script src="/js/admin/top.js"></script>
@endsection

