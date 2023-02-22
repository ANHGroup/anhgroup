<!doctype html>
<html>
<head>
<?php echo $__env->make('layout.header_link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
</head>

<body>

<!--Slider add area start-->
<?php echo $__env->make('layout.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--Slider add area start-->
<!--Logo add area start-->
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="blog_area">
  <?php echo $__env->make('layout.manufacturer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div><!-- blog area end   -->


<!--Contact area Start-->
<div class="contact_area">
  <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
</div><!-- contact area end   -->
<!--Contact area end-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <?php echo $__env->make('layout.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
  </body>
</html>

<?php /**PATH E:\1_ANH Group\Website\anhgroup\resources\views/index.blade.php ENDPATH**/ ?>