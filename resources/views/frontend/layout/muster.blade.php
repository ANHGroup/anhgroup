<!doctype html>
<html>
<head>
@include('frontend.layout.header_link') 
</head>
@include('frontend.layout.header') 

<body>

<!--Slider add area start-->
@yield('slider')
<!--Slider add area start-->
<!--Logo add area start-->
<div class="service_area">
@yield('content')
</div>
<!-- blog area end   -->


<!--Contact area Start-->
<div class="contact_area">
  @include('frontend.layout.footer') 
</div><!-- contact area end   -->
<!--Contact area end-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 @include('frontend.layout.js') 
  </body>
</html>

