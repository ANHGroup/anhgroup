<!doctype html>
<html>
<head>
@include('layout.header_link') 
</head>

<body>

<!--Slider add area start-->
@include('layout.slider')
<!--Slider add area start-->
<!--Logo add area start-->
@include('layout.main')


<div class="blog_area">
  @include('layout.manufacturer')
</div><!-- blog area end   -->


<!--Contact area Start-->
<div class="contact_area">
  @include('layout.footer') 
</div><!-- contact area end   -->
<!--Contact area end-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 @include('layout.js') 
  </body>
</html>

