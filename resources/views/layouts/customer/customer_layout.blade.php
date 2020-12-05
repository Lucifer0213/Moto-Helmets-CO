<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Moto Helmets CO - @yield('title')</title>
  <!-- Mobile Specific Meta Tag-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <!-- Favicon Icons-->
  <link rel="icon" type="image/x-icon" href="{{ url('favicon.ico') }}">
  <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
  <link rel="stylesheet" media="screen" href="{{ url('css\customer\vendor.min.css') }}">
  <!-- Main Template Styles-->
  <link id="mainStyles" rel="stylesheet" media="screen" href=" {{url('css\customer\styles.min.css')}}">
  <!-- Customizer Styles-->
  <link rel="stylesheet" media="screen" href="{{url('css\customer\customizer.min.css')}}">
  <!-- Modernizr-->
  <script src="{{url('js\customer\modernizr.min.js')}}"></script>
</head>
<!-- Body-->

<body>
    <!-- Header-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    @include('layouts.customer.customer_header')
    <!-- Page Content-->
    <!-- Main Slider-->
    @yield('content')
    {{-- footer part --}}
    @include('layouts.customer.customer_footer')
  
  <!-- Back To Top Button-->
  <a class="scroll-to-top-btn" href="#"><i class="icon-chevron-up"></i></a>
  <!-- Backdrop-->
  <div class="site-backdrop"></div>
  <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
  <script src="{{url('js\customer\vendor.min.js')}}"></script>
  <script src="{{url('js\customer\scripts.min.js')}}"></script>
  <!-- Customizer scripts-->
  <script src="{{url('js\customer\customizer.min.js')}}"></script>
</body>

</html>