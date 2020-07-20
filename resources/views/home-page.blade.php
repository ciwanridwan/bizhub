<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="icon" href="img/favicon.png" type="image/png"> -->
    <title>BIZHUB</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bizhub/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('bizhub/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{ asset('bizhub/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('bizhub/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('bizhub/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('bizhub/vendors/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('bizhub/vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('bizhub/vendors/flaticon/flaticon.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('bizhub/css/style.css')}}">
</head>

<body>

    <!--================Header Menu Area =================-->
    @include('layouts.home-pages.header')
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    @include('layouts.home-pages.banner')
    <!--================End Home Banner Area =================-->

    <!--================Start Features Area =================-->
   @include('layouts.home-pages.features-area')
    <!--================End Features Area =================-->

    <!--================Recent Update Area =================-->
    @include('layouts.home-pages.update-area')
    <!--================ Recent Update Area =================-->

    <!--================Start Big Features Area =================-->

    <!--================ Start Testimonial Area =================-->
    <!--================ End Testimonial Area =================-->

    <!--================ Srart Brand Area =================-->

    <!--================ End Brand Area =================-->

    <!--================Impress Area =================-->
   @include('layouts.home-pages.impress-area')
    <!--================End Impress Area =================-->


    <!--================Footer Area =================-->
   @include('layouts.footers.new-footer')
    <!--================End Footer Area =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('bizhub/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('bizhub/js/popper.js')}}"></script>
    <script src="{{ asset('bizhub/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('bizhub/js/stellar.js')}}"></script>
    <script src="{{ asset('bizhub/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('bizhub/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('bizhub/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('bizhub/vendors/isotope/isotope-min.js')}}"></script>
    <script src="{{ asset('bizhub/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('bizhub/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('bizhub/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('bizhub/vendors/counter-up/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('bizhub/js/mail-script.js')}}"></script>
    <!--gmaps Js-->
    <script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE')}}"></script>
    <script src="{{ asset('bizhub/js/gmaps.min.js')}}"></script>
    <script src="{{ asset('bizhub/js/theme.js')}}"></script>
</body>

</html>