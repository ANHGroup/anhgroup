<!DOCTYPE html>
<html lang="en">
@include('backend.admin.layout.header')

  <body class="nav-md">
    <div class="container body">



            <!-- sidebar menu -->
        @include('backend.admin.layout.sidebar')
              <!-- /sidebar menu -->
        <!-- top navigation -->
        @include('backend.admin.layout.navheader')
        <!-- /top navigation -->

        <!-- page content -->
       <div class="right_col" role="main">
         @yield('content')
        </div>
       <!-- /page content -->

        <!-- footer content -->

        <!-- /footer content -->
      </div>

<!-- js start -->
    @include('backend.admin.layout.js')
<!-- js start -->
  </body>
</html>
