<!DOCTYPE html>
<html dir="ltr" lang="zh-CN">
<head>
    <meta charset="UTF-8" />
    <title>@yield('title')</title>

    {{--<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />--}}

    <link href="/back/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="/back/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <link href="/back/summernote/summernote.css" rel="stylesheet" />
    <link href="/back/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />
    <link type="text/css" href="/back/stylesheet/stylesheet.css" rel="stylesheet" media="screen" />
    <script src="/js/vue.js"></script>
    <script src="/js/axios.js"></script>
    @yield('css')




</head>
<body>
<div id="container">
    <div id="header" class="navbar navbar-static-top">
        @include('admin.layouts.header')
    </div>

    <div class="cont">
        {{--<div id="column-left" class="sider11">--}}
            {{--@include('admin.layouts.sider')--}}
        {{--</div>--}}

        <div>
            @yield('content')
        </div>

    </div>

    <div id="footer">
        @include('admin.layouts.footer')
    </div>

</div>

<script type="text/javascript" src="/back/jquery/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/back/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/back/summernote/summernote.js"></script>
<script src="/back/datetimepicker/moment.js" type="text/javascript"></script>
<script src="/back/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="/back/javascript/common.js" type="text/javascript"></script>
@yield('js')
</body>
</html>