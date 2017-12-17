<?php $__env->startSection('css'); ?>
    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="vendors/build/css/custom.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Form Wizards</h3>
        </div>
      </div>
      <div class="clearfix"></div>

      <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Create Tournament</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <?php echo Form::open(['method' => 'POST' , 'action' => ['tournamentDosenController@create'],'class' =>"form-horizontal form-label-left" ,"novalidate",'files'=>true ] ); ?>

              <!-- <form action="<?php echo e(url('/tournamentDosen')); ?>" action="tournamentDosenController@create"  method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data" novalidate> -->
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namaTournament">Nama Tournament<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="namaTournament" class="form-control col-md-7 col-xs-12" name="namaTournament" placeholder="" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggalTournament">Tanggal Tournament <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class='input-group date' id='myDatepicker2'>
                              <input type='text' id="tanggalTournament" name="tanggalTournament" placeholder="Day-Month-Year" class="form-control" required="required" />
                              <span class="input-group-addon">
                                 <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                            </div>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="creator">Creator <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="creator" name="creator" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status Tournament <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" required="required" id="status" name="status">
                            <option value="free">Gratis</option>
                            <option value="paid">Berbayar</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat">Tempat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="tempat" name="tempat" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="point">Poin<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="point" name="point" required="required" placeholder="" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gambar">Gambar<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="gambar" type="file" name="gambar" required="required" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="start">Start Time<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="form-group">
                            <div class='input-group date' id='myDatepicker3'>
                                  <input type='text' id="start" name="start" placeholder="Month-Day-Year" class="form-control" required="required" />
                              <span class="input-group-addon">
                                 <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="finish">Finish Time<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="form-group">
                            <div class='input-group date' id='myDatepicker'>
                                  <input type='text' id="finish" name="finish" placeholder="Month-Day-Year" class="form-control" required="required" />
                              <span class="input-group-addon">
                                 <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="banksoal">Bank Soal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" required="required" id="banksoal" name="banksoal">
                            <option></option>
                            <optgroup label="Kumpulan Soal">
                            <?php foreach ($banksoal as $bank): ?>
                                <option value="<?php echo e($bank->id); ?>"><?php echo e($bank->kodeMK); ?> - <?php echo e($bank->namaSoal); ?> - Butir Soal(<?php echo e($bank->jumlahSoal); ?>) - Tahun Terbit(<?php echo e(date("Y", strtotime($bank->tahunTerbit))); ?>) </option>
                            <?php endforeach; ?>
                            </optgroup>
                          </select>
                        </div>
                      </div>




                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="about">About<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="about" required="required" name="about" class="form-control col-md-7 col-xs-12" rows="5"></textarea>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                      <?php echo e(csrf_field()); ?>

                      <?php echo Form::close(); ?>



                    <?php if(Session::has('createTournament')): ?>
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                      </button>
                      <?php echo e(Session::get('createTournament')); ?>

                    </div>
                    <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="vendors/moment/min/moment.min.js"></script>
<script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-datetimepicker -->
<script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<!-- validator -->
<script src="vendors/validator/validator.js"></script>

<!-- Custom Theme Scripts -->
<script src="vendors/build/js/custom.min.js"></script>
<script>
    $('#myDatepicker').datetimepicker({
        format: 'DD/MM/YYYY HH:mm:ss '
    });

    $('#myDatepicker2').datetimepicker({
        format: 'DD/MM/YYYY'
    });

    $('#myDatepicker3').datetimepicker({
        format: 'HH:mm:ss '
    });

    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });
    $('#myDatepicker9').datetimepicker({
        format: 'DD/MM/YYYY'
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
<?php $__env->stopSection(); ?>
  </body>
</html>

<?php echo $__env->make('layouts.dosen', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>