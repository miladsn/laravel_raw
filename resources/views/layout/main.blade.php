<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Bootstrap -->
    <link href="/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/css/them/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/css/them/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/css/them/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="/css/them/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/css/them/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/css/them/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/css/them/custom.css" rel="stylesheet">
    <title>@yield("title")</title>
</head>
<style>

    .site_title{
        margin-right:15px;
    }
    ul{
        padding-right: 5px;
    }


    .menu_section h3 {
        margin-right: 5px;
    }


</style>
<html>

<body class="nav-md">
<div class="container body" >
    @yield("content")
</div>
<!-- jQuery -->
<script src="/js/them/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/js/them/fastclick.js"></script>
<!-- NProgress -->
<script src="/js/them/nprogress.js"></script>
<!-- Chart.js -->
<script src="/js/them/Chart.min.js"></script>
<!-- gauge.js -->
<script src="/js/them/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="/js/them/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="/js/them/icheck.min.js"></script>
<!-- Skycons -->
<script src="/js/them/skycons.js"></script>
<!-- Flot -->
<script src="/js/them/jquery.flot.js"></script>
<script src="/js/them/jquery.flot.pie.js"></script>
<script src="/js/them/jquery.flot.time.js"></script>
<script src="/js/them/jquery.flot.stack.js"></script>
<script src="/js/them/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="/js/them/jquery.flot.orderBars.js"></script>
<script src="/js/them/jquery.flot.spline.min.js"></script>
<script src="/js/them/curvedLines.js"></script>
<!-- DateJS -->
<script src="/js/them/date.js"></script>
<!-- JQVMap -->
<script src="/js/them/jquery.vmap.js"></script>
<script src="/js/them/jquery.vmap.world.js"></script>
<script src="/js/them/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="/js/them/moment.min.js"></script>
<script src="/js/them/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="/js/them/custom.min.js"></script>
</body>
</html>