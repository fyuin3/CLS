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
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Dropzone.js -->
    <link href="vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="vendors/build/css/custom.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
          <!-- page content -->
          <div class="right_col" role="main">
            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>Manage</h3>
                </div>
              </div>

              <div class="clearfix"></div>

              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Master Data</h2>
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

                      <p>Drag multiple files to the box below for multi upload or click to select files.</p>
                    <form action="<?php echo e(url('/manage')); ?>" class="dropzone"></form>
                    <br />
                    <br />
                    <br />
                    <br />

                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama Item</th>
                          <th>Tanggal Upload</th>
                          <th>Pukul</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>ERD.jpg</td>
                          <td>Senin,30 Oktober 2017</td>
                          <td>15.21</td>
                          <td>
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <button type="submit" class="btn btn-success">Download</button>
                          </td>


                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Laporan TA.docx</td>
                          <td>Minggu,29 Oktober 2017</td>
                          <td>21.00</td>
                          <td>
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <button type="submit" class="btn btn-success">Download</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Catatan.txt</td>
                          <td>Minggu,29 Oktober 2017</td>
                          <td>10.00</td>
                          <td>
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <button type="submit" class="btn btn-success">Download</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /page content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <!-- Dropzone.js -->
    <script src="vendors/dropzone/dist/min/dropzone.min.js"></script>
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

    <!-- Custom Theme Scripts -->
    <script src="vendors/build/js/custom.min.js"></script>
<?php $__env->stopSection(); ?>
  </body>
</html>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>