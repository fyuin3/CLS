<?php $__env->startSection('css'); ?>

<!-- Bootstrap -->
<link href="<?php echo e(URL::asset('vendors/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
<!-- Font Awesome -->
<link href="<?php echo e(URL::asset('vendors/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
<!-- NProgress -->
<link href="<?php echo e(URL::asset('vendors/nprogress/nprogress.css')); ?>" rel="stylesheet">
<!-- iCheck -->
<link href="<?php echo e(URL::asset('vendors/iCheck/skins/flat/green.css')); ?>" rel="stylesheet">
<!-- Custom styling plus plugins -->
<link href="<?php echo e(URL::asset('vendors/build/css/custom.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Tournament</h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
     <div class="x_panel">
       <div class="x_title">
         <h2>Tournament<small>List</small></h2>
         <ul class="nav navbar-right panel_toolbox">
           <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
           </li>
         </ul>
         <div class="clearfix"></div>
       </div>
       <div class="x_content">



         <div class="" role="tabpanel" data-example-id="togglable-tabs">
           <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
             <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Upcoming</a></li>
             <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Ongoing</a></li>
             <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Past</a></li>
             <br/>
           </ul>
           <div id="myTabContent" class="tab-content">

             <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

               <form action="/tournament" method="POST">
                  <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th class="column-title">Nama Tournament</th>
                        <th class="column-title">Tanggal Tournament </th>
                        <th class="column-title">Creator </th>
                        <th class="column-title">Status </th>
                        <th class="column-title">Point </th>
                        <th class="column-title">Start Time</th>
                        <th class="column-title">Finish Time</th>
                        <th class="column-title">Aksi</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php foreach ($tournamentupcoming as $tour): ?>

                        <tr>
                          <td class=" "><?php echo e($tour->namaTournament); ?></td>
                          <td class=" "><?php echo e(date('d-M-Y', strtotime($tour->tanggalTournament))); ?></td>
                          <td class=" "><?php echo e($tour->creator); ?></td>
                          <td class=" "><?php echo e($tour->status); ?></td>
                          <td class="a-right a-right "><?php echo e($tour->point); ?></td>
                          <td class=" "><?php echo e(date('H:i:s', strtotime($tour->start))); ?></td>
                          <td class=" "><?php echo e(date('H:i:s', strtotime($tour->finish))); ?></td>
                          <td class=" "><a href="<?php echo e(Url('/tournament/'.$tour->id)); ?>"><button type="button" class="btn btn-info">Daftar</button></a></td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                      <?php echo e(csrf_field()); ?>

                </form>

                <?php if(Session::has('teamCreated')): ?>
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <?php echo e(Session::get('teamCreated')); ?>

                </div>
                <?php endif; ?>
             </div>

             <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

               <form action="/tournamentExam" method="POST">
                  <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th class="column-title">Nama Tournament</th>
                        <th class="column-title">Tanggal Tournament </th>
                        <th class="column-title">Creator </th>
                        <th class="column-title">Status </th>
                        <th class="column-title">Point </th>
                        <th class="column-title">Start Time</th>
                        <th class="column-title">Finish Time</th>
                        <th class="column-title">Aksi</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php foreach ($tournamentongoing as $touron): ?>

                        <tr>
                          <td class=" "><?php echo e($touron->namaTournament); ?></td>
                          <td class=" "><?php echo e(date('d-M-Y', strtotime($touron->tanggalTournament))); ?></td>
                          <td class=" "><?php echo e($touron->creator); ?></td>
                          <td class=" "><?php echo e($touron->status); ?></td>
                          <td class="a-right a-right "><?php echo e($touron->point); ?></td>
                          <td class=" "><?php echo e(date('H:i:s', strtotime($touron->start))); ?></td>
                          <td class=" "><?php echo e(date('H:i:s', strtotime($touron->finish))); ?></td>
                          <td class=" "><a href="<?php echo e(Url('/tournament/exam/'.$touron->id)); ?>"><button type="button" class="btn btn-info">Join</button></a></td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                      <?php echo e(csrf_field()); ?>

                </form>


             </div>

             <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab2">

               <form action="/tournamentScoreboard" method="POST">
                  <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th class="column-title">Nama Tournament</th>
                        <th class="column-title">Tanggal Tournament </th>
                        <th class="column-title">Creator </th>
                        <th class="column-title">Status </th>
                        <th class="column-title">Point </th>
                        <th class="column-title">Start Time</th>
                        <th class="column-title">Finish Time</th>
                        <th class="column-title">Aksi</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php foreach ($tournamentpast as $tourpast): ?>

                        <tr>
                          <td class=" "><?php echo e($tourpast->namaTournament); ?></td>
                          <td class=" "><?php echo e(date('d-M-Y', strtotime($tourpast->tanggalTournament))); ?></td>
                          <td class=" "><?php echo e($tourpast->creator); ?></td>
                          <td class=" "><?php echo e($tourpast->status); ?></td>
                          <td class="a-right a-right "><?php echo e($tourpast->point); ?></td>
                          <td class=" "><?php echo e(date('H:i:s', strtotime($tourpast->start))); ?></td>
                          <td class=" "><?php echo e(date('H:i:s', strtotime($tourpast->finish))); ?></td>
                          <td class=" "><a href="<?php echo e(Url('/tournament/score/'.$tourpast->id)); ?>"><button type="button" class="btn btn-info">Detail</button></a></td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                      <?php echo e(csrf_field()); ?>

                </form>

             </div>

           </div>
         </div>









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
  <!-- iCheck -->
  <script src="<?php echo e(asset('vendors/iCheck/icheck.min.js')); ?>"></script>

  <!-- Custom Theme Scripts -->
  <script src="<?php echo e(asset('vendors/build/js/custom.min.js')); ?>"></script>

<?php $__env->stopSection(); ?>
  </body>
</html>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>