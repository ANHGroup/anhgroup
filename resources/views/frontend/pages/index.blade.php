<!doctype html>
<html>
<head>
@include('frontend.layout.header_link') 
</head>

<body>

<!--Slider add area start-->
@include('frontend.pages.slider')
<!--Slider add area start-->
<!--Logo add area start-->
@include('frontend.pages.company_header')


<div class="blog_area">
  @include('frontend.pages.companies')
</div><!-- blog area end   -->


<!--Contact area Start-->
<div class="contact_area">
  @include('frontend.layout.footer') 
</div><!-- contact area end   -->
<!--Contact area end-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 @include('frontend.layout.js') 
  </body>
</html>

