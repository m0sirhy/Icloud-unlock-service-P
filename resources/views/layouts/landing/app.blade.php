<!doctype html>
<html lang="en" dir="rtl">


<head>
  @include('includes.landing.head')

</head>

<body>

    

 @yield('content')
    <footer class="oppi_footer_wrap oppi_footer_two">
      @include('includes.landing.footer')
    </footer>
    <!-- oppi_footer_wrap -->


    <script src="{{asset('landing/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('landing/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('landing/vendors/slick/slick.min.js')}}"></script>
    <script src="{{asset('landing/vendors/simple-icon/iconify.min.js')}}"></script>
    <script src="{{asset('landing/vendors/wow/wow.min.js')}}"></script>
    <script src="{{asset('landing/vendors/flex/js/jquery.flexslider.js')}}"></script>
    <script src="{{asset('landing/vendors/sckroller/jquery.parallax-scroll.js')}}"></script>
    <script src="{{asset('landing/vendors/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('landing/vendors/isotope/isotope-min.js')}}"></script>
    <script src="{{asset('landing/vendors/magnify-pop/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('landing/vendors/sckroller/jquery.parallax-scroll.js')}}"></script>
    <script src="{{asset('landing/vendors/stellar/jquery.stellar.js')}}"></script>
    <script src="{{asset('landing/js/main.js')}}"></script>
 
    

    
</body>


</html>