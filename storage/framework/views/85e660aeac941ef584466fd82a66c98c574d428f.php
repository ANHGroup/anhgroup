<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box;}

    input[type=text], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
  }

  input[type=submit] {
      background-color: #04AA6D;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
  }

  input[type=submit]:hover {
      background-color: #45a049;
  }

  .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
  }
</style>
<div class="container">
    <div class="row">
      <div class="contact_section">
          <h1>Contact us</h1>
          <p>OUR TEAM INCLUDES GREAT THINKERS. YOU WOULD LOVE TO WORK WITH THEM AS THEY ARE JUST AMAZING PEOPLE.</p>
          <div class="col-lg-8">
                        <?php if(session()->has('message')): ?>
                        <div class="btn btn-success waves-effect waves-light btn-sm" id="toastr-five">

                          <?php echo e(session()->get('message')); ?>


                          <span aria-hidden="true">&times;</span>
                      </div>
                      <?php endif; ?>
</div>
 <div class="col-lg-8">
          <?php if(count($errors) > 0): ?>
          <div class = "alert alert-danger">
            <ul>
             <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <li><?php echo e($error); ?></li>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </ul>
     </div>
     <?php endif; ?>
</div>
     <div class="col-md-6">
      <form action="<?php echo e(url('/store')); ?>" method="post" id="add_form">
        <?php echo csrf_field(); ?>


        <input type="text" id="fname" name="name" placeholder="Your name..">
        <input type="text" id="fname" name="email" placeholder="Your email ..">
        <input type="text" id="fname" name="phone" placeholder="Your Phone number.">

        <textarea id="subject" name="description" placeholder="Write something.." style="height:100px"></textarea>

        <input type="submit" value="Submit" id="add_btn">
    </form>
</div>
</div>
<div class="col-md-6">
    <div class="contact_text">

        <h3>contact info</h3>
        <ul class="contact_info">
            <li> info@anhgroupbd.com</li>
            <li>Address: 4 Probal Housing, Ring Road, Mohammadpur, Dhaka 1207, Bangladesh. </li>
            <li>+88 096 77 777 888</li>
        </ul>
        <h3>follow us</h3>
        <ul class="contact_social">
            <a href="#"><li><i class="fb fa fa-facebook-square"></i></li></a>
            <a href="#"><li><i class="tw fa fa-twitter-square"></i></li></a>
            <a href="#"><li><i class="rss fa fa-rss-square"></i></li></a>
            <a href="#"><li><i class="gp fa fa-google-plus-square"></i></li></a>
        </ul>                            
    </div>
</div>
</div>
<div class="panel-footer" style="font-style: italic;">
    <h6>Developed by ANH Enterprise Ltd.</h6>@ <?php echo date('m'); ?>
</div>
</div>
</div>
<script>

    $("#add_btn").click(function (){

        $(".error_msg").html('');
        var data = new FormData($('#add_form')[0]);
        
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "POST",
            url: "<?php echo e(url("store")); ?>",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data, textStatus, jqXHR) {

            }
        }).done(function() {
            /*$("#success_msg").html("Data Save Successfully");
            window.location.href = "<?php echo e(url('store')); ?>";*/
            // location.reload();
        }).fail(function(data, textStatus, jqXHR) {
            var json_data = JSON.parse(data.responseText);
            $.each(json_data.errors, function(key, value){
                $("#" + key).after("<span class='error_msg' style='color: red;font-weigh: 600'>" + value + "</span>");
            });
        });
    });
</script>
<?php /**PATH E:\1_ANH Group\Website\anhgroup\resources\views/layout/footer.blade.php ENDPATH**/ ?>