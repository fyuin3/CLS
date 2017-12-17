<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Course Learning System</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="vendors/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="{{ url('/login') }}" method="POST" class="form-horizontal form-label-left" novalidate>
              <h1>Login Form</h1>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="username" name="username" class="form-control col-md-7 col-xs-12" data-validate-length-range="7" data-validate-words="1" name="nrp" placeholder="e.g 1472088" required="required" type="text">
                </div>
              </div>
              <div class="item form-group">
                <label for="password" class="control-label col-md-3" for="pass">Password</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="pass" type="password" name="pass" data-validate-length="6,20" class="form-control col-md-7 col-xs-12"  required="required">
                </div>
              </div>
              @if(Session::has('lupa'))
              <div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  {{Session::get('lupa')}}
                </div>
              @endif
              @if(Session::has('lupaPass'))
              <div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  {{Session::get('lupaPass')}}
                </div>
              @endif
              @if(Session::has('lupaUser'))
              <div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  {{Session::get('lupaUser')}}
                </div>
              @endif

              <div align="right">
                <a class="reset_pass" href="#">Lost your password?</a>
                <button id="login" type="submit" class="btn btn-success" name="btnLogin" >Log in</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="{{ Url('/register')}}" > Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-code"></i> Course learning System</h1>
                  <p>©Steven Yong 1472088</p>
                </div>
              </div>
              {{csrf_field()}}
            </form>
          </section>
        </div>
      </div>


  <!-- PNotify -->
  <script src="vendors/pnotify/dist/pnotify.buttons.js"></script>
	<!-- Script -->
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <!-- <script  src="vendors/js/index.js"></script> -->
    <!-- jQuery -->
   <script src="vendors/jquery/dist/jquery.min.js"></script>
   <!-- Bootstrap -->
   <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
   <!-- FastClick -->
   <script src="vendors/fastclick/lib/fastclick.js"></script>
   <!-- NProgress -->
   <script src="vendors/nprogress/nprogress.js"></script>
  <!-- validator -->
  <script src="vendors/validator/validator.js"></script>
  <!-- bootstrap-daterangepicker -->
   <script src="vendors/moment/min/moment.min.js"></script>
   <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
   <!-- bootstrap-datetimepicker -->
   <script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
   <!-- jquery.inputmask -->
    <script src="vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

  <!-- Initialize datetimepicker -->
 <script>
     $('#myDatepicker').datetimepicker();

     $('#myDatepicker2').datetimepicker({
         format: 'DD.MM.YYYY'
     });

     $('#myDatepicker3').datetimepicker({
         format: 'hh:mm A'
     });

     $('#myDatepicker4').datetimepicker({
         ignoreReadonly: true,
         allowInputToggle: true
     });

     $('#datetimepicker6').datetimepicker();

     $('#datetimepicker7').datetimepicker({
         useCurrent: false
     });

     $("#datetimepicker6").on("dp.change", function(e) {
         $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
     });

     $("#datetimepicker7").on("dp.change", function(e) {
         $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
     });
 </script>

  <!-- Custom Theme Scripts -->
    <script src="vendors/build/js/custom.min.js"></script>
  </body>
</html>
