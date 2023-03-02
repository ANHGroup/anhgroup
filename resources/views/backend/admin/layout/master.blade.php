<!DOCTYPE html>
<html lang="en">
@include('backend.layout.header')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
       
            
            <!-- sidebar menu -->
        @include('backend.layout.sidebar')
              <!-- /sidebar menu -->
        <!-- top navigation -->
        @include('backend.layout.navheader')
        <!-- /top navigation -->

        <!-- page content -->
       <div class="right_col" role="main">
         @yield('content')
        </div>
       <!-- /page content -->

        <!-- footer content -->
        <footer>
          @include('backend.layout.footer')
        </footer>
        <!-- /footer content -->
      </div>
    </div>
<!-- js start -->
    @include('backend.layout.js')
<!-- js start -->
  </body>
</html>