<html lang="en">

<head>
    <!--Add-Title-Here-->
    @yield('tittle')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--Bootstrap-->
    <link rel="stylesheet" href="{{ url('public/assets/css/bootstrap.css') }}">

    <!--Font-Awesome-->
    <link rel="stylesheet" href="{{ url('public/assets/css/font-awesome.min.css') }}">

    <!--Owl-Carousel-->
    <link rel="stylesheet" href="{{ url('public/assets/plugins/owl/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/plugins/owl/owl.theme.default.min.css') }}">

    <!--Youtube-Video-Popup-->
    <link rel="stylesheet" href="{{ url('public/assets/plugins/videoPopup/videoPopup.css') }}">

    <!--Map-->
    <link rel="stylesheet" href="{{ url('public/assets/plugins/map/map-style.css') }}">

    <!--Custom-Main-File-->
    <link rel="stylesheet" href="{{ url('public/assets/css/custom.css') }}">

    <!--Scroll-Animations-Css-->
    <link rel="stylesheet" href="{{ url('public/assets/plugins/waypoints/animate.css') }}">

    <!--Mobile-Responsive-->
    <link rel="stylesheet" href="{{ url('public/assets/css/responsive.css') }}">
    <script src="{{ url('public/assets/js/jquery-2.1.1.js') }}"></script>
</head>

<body style="overflow-x: hidden">

			@yield('content')
    <!--Javascript-Files-->

    <!--Google-jQuery-->
    

    <!--Bootstrap-->
    <script type="text/javascript" src="{{ url('public/assets/js/bootstrap.js') }}"></script>

    <!--Owl-Carousel-->
    <script type="text/javascript" src="{{ url('public/assets/plugins/owl/owl.carousel.min.js') }}"></script>

    <!--Scroll Animations Js-->
    <script type="text/javascript" src="{{ url('public/assets/plugins/waypoints/waypoint.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/assets/plugins/waypoints/animation.js') }}"></script>

    <!--Counter-->
    <script type="text/javascript" src="{{ url('public/assets/plugins/numScroll/numscroller-1.0.js') }}"></script>

    <!--Youtube-Video-Popups-->
    <script type="text/javascript" src="{{ url('public/assets/plugins/videoPopup/videoPopup.jquery.js') }}"></script>

    <!--Map-Google-jQuery-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
    <!--Map-Javascript-->
    <script type="text/javascript" src="{{ url('public/assets/plugins/map/map.js') }}"></script>




    <!--Common-Javascript-Main-File--->
    <script type="text/javascript" src="{{ url('public/assets/js/common.js') }}"></script>

    <!--Javascript-Files-->
</body>

</html>