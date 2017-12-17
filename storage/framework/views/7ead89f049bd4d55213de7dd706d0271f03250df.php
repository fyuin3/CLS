<?php $__env->startSection('css'); ?>
    <!-- Bootstrap -->
    <link href="<?php echo e(URL::asset('vendors/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(URL::asset('vendors/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo e(URL::asset('vendors/nprogress/nprogress.css')); ?>" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo e(URL::asset('vendors/build/css/custom.min.css')); ?>" rel="stylesheet">
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
              <h2>Form Tournament</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">


              <!-- Smart Wizard -->

              <div id="wizard" class="form_wizard wizard_horizontal">
                <ul class="wizard_steps">
                  <li>
                    <a href="#step-1">
                      <span class="step_no">1</span>
                      <span class="step_descr">
                                        Step 1<br />
                                        <small>Poster Tournament</small>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="#step-2">
                      <span class="step_no">2</span>
                      <span class="step_descr">
                                        Step 2<br />
                                        <small>Info Tournament</small>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="#step-3">
                      <span class="step_no">3</span>
                      <span class="step_descr">
                                        Step 3<br />
                                        <small>Jadwal</small>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="#step-4">
                      <span class="step_no">4</span>
                      <span class="step_descr">
                                        Step 4<br />
                                        <small>Pendaftaran</small>
                      </span>
                    </a>
                  </li>
                </ul>
                <div id="step-1">
                  <h2 class="StepTitle">Poster Tournament</h2>
                  <div align="center">

                    <?php if ($tournament->gambar != null): ?>
                        <img src="<?php echo e(URL::asset('images/'.$tournament->gambar)); ?>" width="60%" height="auto">
                    <?php else: ?>
                      <h1>Tidak ada poster untuk tournament berikut</h1>
                    <?php endif; ?>


                  </div>
                </div>

                <div id="step-2">
                  <h2 class="StepTitle">Info Tournament</h2>
                  <p>
                    <pre>
                    <?php echo e($tournament->about); ?>

                    </pre>
                  </p>
                </div>

                <div id="step-3">
                  <h2 class="StepTitle">Jadwal</h2>

                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Petunjuk</th>
                            <th>&nbsp;</th>
                            <th>Keterangan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Hari</td>
                            <td>:</td>
                            <td><?php echo e(date("l", strtotime($tournament->tanggalTournament))); ?></td>
                          </tr>
                          <tr>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td><?php echo e(date("d-M-Y", strtotime($tournament->tanggalTournament))); ?></td>
                          </tr>
                          <tr>
                            <td>Waktu</td>
                            <td>:</td>
                            <td><?php echo e(date('H:i:s', strtotime($tournament->start))); ?> - <?php echo e(date('H:i:s', strtotime($tournament->finish))); ?></td>
                          </tr>
                          <tr>
                            <td>Tempat</td>
                            <td>:</td>
                            <td><?php echo e($tournament->tempat); ?></td>
                          </tr>

                        </tbody>
                      </table>

            </div>



                <div id="step-4">

                <?php echo Form::open(['method' => 'POST' , 'action' => ['tournamentController@create'],'class' =>"form-horizontal form-label-left" ,"novalidate" ]  ); ?>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namaTeam">Nama Team<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="namaTeam" name="namaTeam" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namaAnggota1">Anggota 1(Captain)<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="namaAnggota1" name="namaAnggota1" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namaAnggota2">Anggota 2<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="namaAnggota2" name="namaAnggota2" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namaAnggota3">Anggota 3<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="namaAnggota3" name="namaAnggota3" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div align="center">
                      <input type="hidden" id="idTournament" name="idTournament" value="<?php echo e($tournament->id); ?>">
                      <button id="send" type="submit" class="btn btn-success" name="btnLivestream" >Submit</button>
                    </div>
                <?php echo e(csrf_field()); ?>

                <?php echo Form::close(); ?>






                </div>

              </div>
              <!-- End SmartWizard Content -->

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
<script src="<?php echo e(asset('vendors/jquery/dist/jquery.min.js')); ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo e(asset('vendors/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(asset('vendors/fastclick/lib/fastclick.js')); ?>"></script>
<!-- NProgress -->
<script src="<?php echo e(asset('vendors/nprogress/nprogress.js')); ?>"></script>
<!-- jQuery Smart Wizard -->
<script src="<?php echo e(asset('vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')); ?>"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo e(asset('vendors/build/js/custom.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
  </body>
</html>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>