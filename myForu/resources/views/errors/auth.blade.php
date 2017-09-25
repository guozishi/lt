<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>拒绝访问</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <style type="text/css">
        body {
            overflow:hidden!important;
            padding-top: 120px;
        }
    </style>
    <!-- Le styles -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/loader-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/signin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/extra-pages.css') }}">






    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/minus.png">
</head>

<body><div id="awwwards" class="right black"><a href="http://www.awwwards.com/best-websites/apricot-navigation-admin-dashboard-template" target="_blank">best websites of the world</a></div>
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>


<div class="logo-error">
    <h1>Apricot
        <span>v1.0</span>
    </h1>
</div>

<!-- Main content -->
<section class="page-error">

    <div class="error-page">
        <h2 class="headline text-info">404</h2>
        <div class="error-content">
            <h3><i class="fa fa-warning text-yellow"></i> 提示</h3>
            <p>
                权限不够,请联系管理员升级权限<a class="error-link" href='{{ url('/admin') }}'>点击回退</a>
            </p>
            <form class='search-form' action="{{ url('/admin') }}" method="get">
                <input type="text" name="search" class='form-control' placeholder="点击回车回退">
            </form>
        </div>
        <!-- /.error-content -->
    </div>
    <!-- /.error-page -->

</section>








<!--  END OF PAPER WRAP -->




<!-- MAIN EFFECT -->
<script type="text/javascript" src="{{ asset('assets/js/preloader.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/load.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>
