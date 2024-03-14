<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Lava Landing Page HTML Template</title>
<!--

Lava Landing Page

https://templatemo.com/tm-540-lava-landing-page

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">

    <link rel="stylesheet" href="/assets/css/templatemo-lava.css">

    <link rel="stylesheet" href="/assets/css/owl-carousel.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    @yield('header')
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    @include('frontend.welcome')
  
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    @include('frontend.feature')
  
    <!-- ***** Features Big Item End ***** -->

    <div class="left-image-decor"></div>

    <!-- ***** Features Big Item Start ***** -->
    @include('frontend.service')
  
    <!-- ***** Features Big Item End ***** -->

    <div class="right-image-decor"></div>

    <!-- ***** Testimonials Starts ***** -->
    @include('frontend.testimonial')
    <!-- ***** Testimonials Ends ***** -->


    <!-- ***** Footer Start ***** -->
    @yield('footer')

    <!-- jQuery -->
    <script src="/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="/assets/js/owl-carousel.js"></script>
    <script src="/assets/js/scrollreveal.min.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="/assets/js/custom.js"></script>

</body>
</html>