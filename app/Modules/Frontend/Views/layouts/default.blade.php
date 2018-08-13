<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Liem Phan's Portfolio">
    <meta name="keywords" content="Lập trình website, website developer, website designer">
    <meta name="author" content="Liem Phan">

    <title>Liem Phan's Portfolio</title>

    <!--== bootstrap ==-->
    <link href="{!! asset('public/assets/frontend') !!}/css/bootstrap.min.css" rel="stylesheet">

    <!--== font-awesome ==-->
    <link href="{!! asset('public/assets/frontend') !!}/css/font-awesome.min.css" rel="stylesheet">

    <!--== magnific-popup ==-->
    <link href="{!! asset('public/assets/frontend') !!}/css/magnific-popup.css" rel="stylesheet">

    <!--== owl carousel ==-->
    <link href="{!! asset('public/assets/frontend') !!}/css/owl.carousel.css" rel="stylesheet">

    <!--== animate css ==-->
    <link href="{!! asset('public/assets/frontend') !!}/css/animate.min.css" rel="stylesheet">

    <!--== style css ==-->
    <link href="{!! asset('public/assets/frontend') !!}/css/style.css" rel="stylesheet">

    <!--== responsive css ==-->
    <link href="{!! asset('public/assets/frontend') !!}/css/responsive.css" rel="stylesheet">

    <!--== theme color css ==-->
    <link href="{!! asset('public/assets/frontend') !!}/css/theme-color.css" rel="stylesheet">

    <!--== jQuery ==-->
    <script src="{!! asset('public/assets/frontend') !!}/js/jquery-2.1.4.min.js"></script>


    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <!--======= PRELOADER =======-->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    @include('Frontend::layouts.header')

    @yield('content')

    @include('Frontend::layouts.footer')

    <!--== plugins js ==-->
    <script src="{!! asset('public/assets/frontend') !!}/js/plugins.js"></script>

    <!--== typed js ==-->
    <script src="{!! asset('public/assets/frontend') !!}/js/animated.headline.js"></script>

    <!--== stellar js ==-->
    <script src="{!! asset('public/assets/frontend') !!}/js/jquery.stellar.min.js"></script>

    <!--== counterup js ==-->
    <script src="{!! asset('public/assets/frontend') !!}/js/jquery.inview.min.js"></script>

    <!--== wow js ==-->
    <script src="{!! asset('public/assets/frontend') !!}/js/wow.min.js"></script>

    <!--== validator js ==-->
    <script src="{!! asset('public/assets/frontend') !!}/js/validator.min.js"></script>

    <!--== mixitup js ==-->
    <script src="{!! asset('public/assets/frontend') !!}/js/jquery.mixitup.js"></script>

    <!--== google map js ==-->
    <script src="{!! asset('public/assets/frontend') !!}/js/gmap3.min.js"></script>
    <script src="{!! asset('public/assets/frontend') !!}/js/custom-google-map.js"></script>

    <!-- google map api js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUxBgcE7vcu0GU9BuMQMe4qusYG7cSX5k&callback=initMap"></script>

    <!--== main js ==-->
    <script src="{!! asset('public/assets/frontend') !!}/js/main.js"></script>

    @yield('script')

</body>
</html>