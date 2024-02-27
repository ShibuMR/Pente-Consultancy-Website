<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>@yield('title')</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- icomoon font -->
    <link rel="stylesheet" type="text/css" href="assets/css/icomoon.css">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <link rel="stylesheet" type="text/css" href="assets/css/swiper-bundle.min.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/icon/Favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/icon/Favicon.png">
    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    

</head>


<body class="header-fixed counter-scroll">

    <!-- preloader -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- /preloader -->

    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">
            <!-- Header Wrap -->
            @include('layout.include.header')

            @yield('main-content')

            <!-- Footer -->
            @include('layout.include.footer')<!-- /#footer -->

        </div>
    </div>
    <!-- /#wrapper -->

    <a id="scroll-top"></a>

    <!-- Javascript -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/plugin.js"></script>
    <script src="assets/js/jquery-validate.js"></script>
    <script src="assets/js/countto.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/shortcodes.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://kit.fontawesome.com/a0f86ed6de.js" crossorigin="anonymous"></script>
    


</body>

</html>