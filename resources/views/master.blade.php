<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Site Title  -->
    {!! SEO::generate() !!}
    <meta property="og:locale" content="{{ app()->getLocale() }}"/>
    <meta itemprop="publisher" content="Tanventurer"/>
    <meta itemprop="author" content="Tanvir Reza Anik"/>
    <meta itemprop="author" content="তানভীর রেজা অনিক"/>
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('assets/css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('assets/css/flexslider.css')}}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('assets/js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{asset('assets/js/respond.min.js')}}"></script>
    <![endif]-->

</head>
<body>

<!-- jQuery -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
<div>
    @yield('content')
</div>
<!-- Bootstrap -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
<!-- Flexslider -->
<script src="{{asset('assets/js/jquery.flexslider-min.js')}}"></script>
<!-- Owl carousel -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- Counters -->
<script src="{{asset('assets/js/jquery.countTo.js')}}"></script>


<!-- MAIN JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
