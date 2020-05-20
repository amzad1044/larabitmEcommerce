<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="{{asset('/')}}/front/img/favicon.png" type="image/png" />
  <title>@yield('title')</title>
  <!-- Bootstrap CSS -->
  <link href="{{URL::asset('front/css/bootstrap.css')}}" rel="stylesheet">
  <link href="{{URL::asset('front/vendors/linericon/style.css')}}" rel="stylesheet">
  <link href="{{URL::asset('front/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('front/css/themify-icons.css')}}" rel="stylesheet">
  <link href="{{URL::asset('front/css/flaticon.css')}}" rel="stylesheet">
  <link href="{{URL::asset('front/vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('front/vendors/lightbox/simpleLightbox.css')}}" rel="stylesheet">
  <link href="{{URL::asset('front/vendors/nice-select/css/nice-select.css')}}" rel="stylesheet">
  <link href="{{URL::asset('front/vendors/animate-css/animate.css')}}" rel="stylesheet">
  <link href="{{URL::asset('front/vendors/jquery-ui/jquery-ui.css')}}" rel="stylesheet">
  <link href="{{URL::asset('front/css/style.css')}}" rel="stylesheet">
  <link href="{{URL::asset('front/css/responsive.css')}}" rel="stylesheet">

  <!-- <link rel="stylesheet" href="{{asset('/')}}/front/vendors/linericon/style.css" />
  <link rel="stylesheet" href="{{asset('/')}}/front/css/font-awesome.min.css" />
  <link rel="stylesheet" href="{{asset('/')}}/front/css/themify-icons.css" />
  <link rel="stylesheet" href="{{asset('/')}}/front/css/flaticon.css" />
  <link rel="stylesheet" href="{{asset('/')}}/front/vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="{{asset('/')}}/front/vendors/lightbox/simpleLightbox.css" />
  <link rel="stylesheet" href="{{asset('/')}}/front/vendors/nice-select/css/nice-select.css" />
  <link rel="stylesheet" href="{{asset('/')}}/front/vendors/animate-css/animate.css" />
  <link rel="stylesheet" href="{{asset('/')}}/front/vendors/jquery-ui/jquery-ui.css" /> -->
  <!-- main css -->
  <!-- <link rel="stylesheet" href="{{asset('/')}}/front/css/style.css" />
  <link rel="stylesheet" href="{{asset('/')}}/front/css/responsive.css" /> -->
</head>

<body>
  <!--================Header Menu Area =================-->
    @include('frontEnd.includes.header')
  <!--================Header Menu Area =================-->

    @yield('body')
  <!--================ start footer Area  =================-->
    @include('frontEnd.includes.footer')
  <!--================ End footer Area  =================-->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <link href="{{URL::asset('front/css/responsive.css')}}" rel="stylesheet">


  <script src="{{URL::asset('front/js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{URL::asset('front/js/popper.js')}}"></script>
  <script src="{{URL::asset('front/js/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('front/js/stellar.js')}}"></script>
  <script src="{{URL::asset('front/vendors/lightbox/simpleLightbox.min.js')}}"></script>
  <script src="{{URL::asset('front/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{URL::asset('front/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{URL::asset('front/vendors/isotope/isotope-min.js')}}"></script>
  <script src="{{URL::asset('front/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{URL::asset('front/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{URL::asset('front/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
  <script src="{{URL::asset('front/vendors/counter-up/jquery.counterup.js')}}"></script>
  <script src="{{URL::asset('front/js/mail-script.js')}}"></script>
  <script src="{{URL::asset('front/js/theme.js')}}"></script>
  
  



  
  <!-- <script src="{{asset('/')}}/front/js/popper.js"></script>
  <script src="{{asset('/')}}/front/js/bootstrap.min.js"></script>
  <script src="{{asset('/')}}/front/js/stellar.js"></script>
  <script src="{{asset('/')}}/front/vendors/lightbox/simpleLightbox.min.js"></script>
  <script src="{{asset('/')}}/front/vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="{{asset('/')}}/front/vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="{{asset('/')}}/front/vendors/isotope/isotope-min.js"></script>
  <script src="{{asset('/')}}/front/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="{{asset('/')}}/front/js/jquery.ajaxchimp.min.js"></script>
  <script src="{{asset('/')}}/front/vendors/counter-up/jquery.waypoints.min.js"></script>
  <script src="{{asset('/')}}/front/vendors/counter-up/jquery.counterup.js"></script>
  <script src="{{asset('/')}}/front/js/mail-script.js"></script>
  <script src="{{asset('/')}}/front/js/theme.js"></script> -->
</body>

</html>