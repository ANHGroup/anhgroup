<!DOCTYPE html>
<html lang="en">
@include('backend.website.layout.header')

  <body class="">
     <!-- page content -->
       <div class="" role="main">
         @yield('content')
        </div>
       <!-- /page content -->
     <!-- js start -->
    @include('backend.website.layout.js')
     <!-- js start -->
  </body>
</html>