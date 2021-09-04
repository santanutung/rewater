<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>



 <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.png">

    <!-- CSS Files -->
    <!--==== Google Fonts ====-->
    <link href="https://fonts.googleapis.com/css?family=Exo+2:400,500,600,700%7CSchoolbell" rel="stylesheet">

    <!--==== Bootstrap css file ====-->
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/bootstrap.min.css">

    <!--==== Font-Awesome css file ====-->
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/font-awesome.min.css">

    <!-- Owl Carusel css file -->
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/plugins/owl-carousel/owl.carousel.min.css">

    <!-- camera css -->
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/plugins/camera/camera.min.css">

    <!-- ====video poppu css==== -->
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/plugins/Magnific-Popup/magnific-popup.css">

    <!--==== Style css file ====-->
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/style.css">

    <!--==== Responsive css file ====-->
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/responsive.css">

    <!--==== Custom css file ====-->
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/custom.css">
    @stack('css')
</head>
<body>


<!-- Top Bar -->
    @include('layouts.forntend.partial.menu')
<!-- #Top Bar -->

    <!-- Left Sidebar -->

    <!-- #END# Left Sidebar -->

    @yield('content')


 @include('layouts.forntend.partial.footer')


    <!-- JS Files -->
   <!-- ==== JQuery 3.3.1 js file==== -->
    <script src="{{ asset('/') }}frontend/assets/js/jquery-3.3.1.min.js"></script>

    <!-- ==== Bootstrap js file==== -->
    <script src="{{ asset('/') }}frontend/assets/js/bootstrap.bundle.min.js"></script>

    <!-- ==== JQuery Waypoint js file==== -->
    <script src="{{ asset('/') }}frontend/assets/plugins/waypoints/jquery.waypoints.min.js"></script>

    <!-- ==== Parsley js file==== -->
    <script src="{{ asset('/') }}frontend/assets/plugins/parsley/parsley.min.js"></script>

    <!-- ==== Ratina js file==== -->
    <script src="{{ asset('/') }}frontend/assets/plugins/retinajs/retina.min.js"></script>

    <!-- ==== parallax js==== -->
    <script src="{{ asset('/') }}frontend/assets/plugins/parallax/parallax.js"></script>

    <!-- ==== Owl Carousel js file==== -->
    <script src="{{ asset('/') }}frontend/assets/plugins/owl-carousel/owl.carousel.min.js"></script>

    <!-- ==== Menu  js file==== -->
    <script src="{{ asset('/') }}frontend/assets/js/menu.min.js"></script>

    <!-- ===video popup=== -->
    <script src="{{ asset('/') }}frontend/assets/plugins/Magnific-Popup/jquery.magnific-popup.min.js"></script>

    <!-- ====Counter js file=== -->
    <script src="{{ asset('/') }}frontend/assets/plugins/waypoints/jquery.counterup.min.js"></script>

    <!-- cammera js -->
    <script src="{{ asset('/') }}frontend/assets/plugins/camera/camera.min.js"></script>

    <!-- easing js -->
    <script src="{{ asset('/') }}frontend/assets/js/easing.js"></script>

     <!--==== google map api key ====-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2D8wrWMY3XZnuHO6C31uq90JiuaFzGws"></script>

    <!-- ==== Script js file==== -->
    <script src="{{ asset('/') }}frontend/assets/js/scripts.js"></script>

    <!-- ==== Custom js file==== -->
    <script src="{{ asset('/') }}frontend/assets/js/custom.js"></script>
@stack('js')
</body>
</html>