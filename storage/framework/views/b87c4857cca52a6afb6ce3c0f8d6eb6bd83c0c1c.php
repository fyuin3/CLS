<?php $__env->startSection('css'); ?>

    <!-- Bootstrap -->
      <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Font Awesome -->
      <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <!-- NProgress -->
      <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
      <!-- iCheck -->
      <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
      <!-- bootstrap-progressbar -->
      <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
      <!-- PNotify -->
      <link href="vendors/pnotify/dist/pnotify.css" rel="stylesheet">
      <link href="vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
      <link href="vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="vendors/build/css/custom.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
          <!-- page content -->
          <div class="right_col" role="main">
            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>Notif</h3>
                </div>
              </div>

              <div class="clearfix"></div>

              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Notifications</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                          </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <p>Regular notifications will fade away </p>
                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'Regular Success',
                                  text: 'Belajar Matrix untuk Pre Test Dasar pemrograman',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });">Done</button>

                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'New Thing',
                                  text: 'Ada Seminar Linux Security di ADV 1 hari ',
                                  type: 'info',
                                  styling: 'bootstrap3'
                              });">Info</button>

                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'Regular Notice',
                                  text: 'Check me out! I\'m a notice.',
                                  styling: 'bootstrap3'
                              });">Reminder</button>

                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'TUGAS BESAR WEB ',
                                  text: 'Deadline Pengumpulan TUGAS BESAR PEMROGRAMAN WEB Hari ini jam 21.00',
                                  type: 'error',
                                  styling: 'bootstrap3'
                              });">Urgent</button>

                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'KELAS PENGGANTI',
                                  text: 'Kelas Pengganti JARKOM kelas C hari selasa dengan dosen Pak Timotius diganti ke hari Jumat,30 Oktober 2017 jam 13.00 - 15.00',
                                  type: 'info',
                                  styling: 'bootstrap3',
                                  addclass: 'dark'
                              });">Broadcasting</button>

                  <hr />

                  <p>Sticky notifications.. these wont close unless user closes them.</p>
                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'DONE',
                                  text: 'Belajar Matrix untuk Pre Test Dasar pemrograman',
                                  type: 'success',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Done</button>


                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'PENGUMUMAN',
                                  text: 'Ada Seminar Linux Security di ADV 1 hari ',
                                  type: 'info',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Info</button>


                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'POST TEST REMINDER',
                                  text: 'Post Test ASD1 materi Queue 3 hari lagi',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Reminder</button>


                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'TUGAS BESAR WEB ',
                                  text: 'Deadline Pengumpulan TUGAS BESAR PEMROGRAMAN WEB Hari ini jam 21.00',
                                  type: 'error',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Urgent</button>


                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'KELAS PENGGANTI',
                                  text: 'Kelas Pengganti JARKOM kelas C hari selasa dengan dosen Pak Timotius diganti ke hari Jumat,30 Oktober 2017 jam 13.00 - 15.00',
                                  type: 'info',
                                  hide: false,
                                  styling: 'bootstrap3',
                                  addclass: 'dark'
                              });">Broadcasting</button>

                  <hr/>

                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'Non-Blocking Notice',
                                  type: 'info',
                                  text: 'When you hover over me I\'ll fade to show the elements underneath. Feel free to click any of them just like I wasn\'t even here.',
                                  nonblock: {
                                      nonblock: true
                                  },
                                  styling: 'bootstrap3',
                                  addclass: 'dark'
                              });">Non-Blocking Notice</button>

                  <hr />

                  <div id="antoox">
                    <div>
                      <div></div>
                      <div></div>
                      <div></div>
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
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- PNotify -->
    <script src="vendors/pnotify/dist/pnotify.js"></script>
    <script src="vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="vendors/build/js/custom.min.js"></script>
<?php $__env->stopSection(); ?>
  </body>
</html>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>