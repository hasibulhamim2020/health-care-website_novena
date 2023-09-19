<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">

    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front-end-assets')}}/images/favicon.ico" />

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('front-end-assets')}}/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="{{ asset('front-end-assets')}}/plugins/icofont/icofont.min.css">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="{{ asset('front-end-assets')}}/plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="{{ asset('front-end-assets')}}/plugins/slick-carousel/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('front-end-assets')}}/css/style.css">

</head>

<body id="top">

@include('front-end.include.header')

<!-- Slider Start -->
@yield('content')
<!-- footer Start -->
@include('front-end.include.footer')

<!--
Essential Scripts
=====================================-->


<!-- Main jQuery -->
<script src="{{ asset('front-end-assets')}}/plugins/jquery/jquery.js"></script>
<!-- Bootstrap 4.3.2 -->
<script src="{{ asset('front-end-assets')}}/plugins/bootstrap/js/popper.js"></script>
<script src="{{ asset('front-end-assets')}}/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('front-end-assets')}}/plugins/counterup/jquery.easing.js"></script>
<!-- Slick Slider -->
<script src="{{ asset('front-end-assets')}}/plugins/slick-carousel/slick/slick.min.js"></script>
<!-- Counterup -->
<script src="{{ asset('front-end-assets')}}/plugins/counterup/jquery.waypoints.min.js"></script>

<script src="{{ asset('front-end-assets')}}/plugins/shuffle/shuffle.min.js"></script>
<script src="{{ asset('front-end-assets')}}/plugins/counterup/jquery.counterup.min.js"></script>
<!-- Google Map -->
<script src="{{ asset('front-end-assets')}}/plugins/google-map/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

<script src="{{ asset('front-end-assets')}}/js/script.js"></script>
<script src="{{ asset('front-end-assets')}}/js/contact.js"></script>

</body>
</html>
