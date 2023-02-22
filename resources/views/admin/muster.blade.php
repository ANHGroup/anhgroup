<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela dghgh! | </title>

    <!-- Bootstrap -->
    <link href="{{asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link href="{{asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!-- NProgress -->
    <link href="{{asset('admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom Theme Style -->
    <link href="{{asset('admin/build/css/custom.min.css')}}" rel="stylesheet" type="text/css">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            <div class="col-md-3 left_col">
                @include('admin.layout.navbar')
            </div>
            <!-- top navigation -->
            <div class="top_nav">
               <div class="nav_menu">
                   @include('admin.layout.navheader')
               </div>
           </div>
           <!-- /top navigation -->

           <!-- page content -->
           <div class="right_col" role="main">
                <div class="">
                    
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                
                                <div class="x_content">
                                    <form class="" action="" method="post" id="add_form">
                                         @csrf
                                        <span class="section">Personal Info</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Logo<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="file" name="logo" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Greetings<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="greetings"  type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Quatation<span class="">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="quatation" type="text" /></div>
                                        </div>
                                        
                                        
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='button' class="btn btn-primary" id="add_btn">Submit</button>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                @include('admin.layout.footer')
            </footer>
            <!-- /footer content -->
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{asset('admin/vendors/validator/multifield.js')}}"></script>
    <script src="{{asset('admin/vendors/validator/validator.js')}}"></script>
    
    <!-- Javascript functions	-->
    <script>
      function hideshow(){
         var password = document.getElementById("password1");
         var slash = document.getElementById("slash");
         var eye = document.getElementById("eye");

         if(password.type === 'password'){
            password.type = "text";
            slash.style.display = "block";
            eye.style.display = "none";
        }
        else{
            password.type = "password";
            slash.style.display = "none";
            eye.style.display = "block";
        }

    }
</script>

<script>
        // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
    var validator = new FormValidator({
        "events": ['blur', 'input', 'change']
    }, document.forms[0]);
        // on form "submit" event
    document.forms[0].onsubmit = function(e) {
        var submit = true,
        validatorResult = validator.checkAll(this);
        console.log(validatorResult);
        return !!validatorResult.valid;
    };
        // on form "reset" event
    document.forms[0].onreset = function(e) {
        validator.reset();
    };
        // stuff related ONLY for this demo page:
    $('.toggleValidationTooltips').change(function() {
        validator.settings.alerts = !this.checked;
        if (this.checked)
            $('form .alert').remove();
    }).prop('checked', false);

</script>

<!-- jQuery -->
<script src="{{asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('admin/vendors/nprogress/nprogress.js')}}"></script>
<!-- validator -->
<!-- <script src="{{asset('admin/vendors/validator/validator.js')}}"></script> -->

<!-- Custom Theme Scripts -->
<script src="{{asset('admin/build/js/custom.min.js')}}"></script>
<script>

    $("#add_btn").click(function (){

        $(".error_msg").html('');
        var data = new FormData($('#add_form')[0]);
        
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "POST",
            url: "{{url("topsection")}}",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data, textStatus, jqXHR) {

            }
        }).done(function() {
            /*$("#success_msg").html("Data Save Successfully");
            window.location.href = "{{ url('store')}}";*/
            // location.reload();
        }).fail(function(data, textStatus, jqXHR) {
            var json_data = JSON.parse(data.responseText);
            $.each(json_data.errors, function(key, value){
                $("#" + key).after("<span class='error_msg' style='color: red;font-weigh: 600'>" + value + "</span>");
            });
        });
    });
</script>
</body>

</html>
