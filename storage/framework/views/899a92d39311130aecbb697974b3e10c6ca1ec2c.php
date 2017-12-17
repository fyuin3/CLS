<?php $__env->startSection('css'); ?>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="vendors/build/css/custom.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Super ADMIN<small></small></h3>
              </div>
            </div>

            <div class="clearfix"></div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Manage Roles<small></small></h2>
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
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">User</a></li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Mahasiswa</a></li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Dosen</a></li>
                        <br/>
                      </ul>
                      <div id="myTabContent" class="tab-content">

                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                          <br/>
                          <div class="table-responsive">
                              <form action="/superadmin" method="POST">
                              <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                  <tr class="headings">
                                    <th>
                                      <input type="checkbox" id="check-all" class="flat">
                                    </th>
                                    <th class="column-title">NRP/NIK</th>
                                    <th class="column-title">Nama</th>
                                    <th class="column-title">Email</th>
                                    <th class="column-title">Fakultas</th>
                                    <th class="column-title">Prodi</th>
                                    <th class="column-title">Role</th>
                                    <th class="column-title">Created at</th>
                                    <th class="column-title">Updated at</th>
                                    <th class="column-title" colspan="2">Aksi</th>
                                    <th class="bulk-actions" colspan="10">
                                      <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                    </th>
                                  </tr>
                                </thead>

                                <tbody>
                                <?php foreach ($register as $reg): ?>
                                      <tr>
                                        <td class="a-center ">
                                          <input type="checkbox" class="flat" name="table_records" id="table_records">
                                        </td>
                                        <td class=" "><?php echo e($reg->nrp); ?></td>
                                        <td class=" "><?php echo e($reg->nama); ?></td>
                                        <td class=" "><?php echo e($reg->email); ?></td>
                                        <td class=" "><?php echo e($reg->fakultas); ?></td>
                                        <td class=" "><?php echo e($reg->prodi); ?></td>
                                        <td class=" "><?php echo e($reg->role); ?></td>
                                        <td class=" "><?php echo e($reg->created_at); ?></td>
                                        <td class=" "><?php echo e($reg->updated_at); ?></td>
                                        <td class=" "><a href="<?php echo e(Url('/superadmin/'.$reg->id)); ?>"><input type="button" name="btnUpdate" value="Update" id="update"><input type="hidden" name="_method" value="PUT"></a></td>
                                        <td class=" "><a href="<?php echo e(Url('/superadmin/delete/'.$reg->id)); ?>"><input type="button" name="btnDelete" value="Delete" id="delete"><input type="hidden" name="_method" value="DELETE"></a></td>
                                      </tr>
                                  <?php endforeach; ?>
                                </tbody>
                              </table>

                              <?php echo e(csrf_field()); ?>

                          </form>
                            </div>
                            <div align="right">
                              <a href="<?php echo e(Url('/register')); ?>"><input type="button" value="Add" name="btnAdd"></a>&nbsp;


                            </div>

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                          <div class="table-responsive">
                              <form action="/superadmin" method="POST">
                              <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                  <tr class="headings">
                                    <th>
                                      <input type="checkbox" id="check-all" class="flat">
                                    </th>
                                    <th class="column-title">NRP/NIK</th>
                                    <th class="column-title">Nama</th>
                                    <th class="column-title">Email</th>
                                    <th class="column-title">Fakultas</th>
                                    <th class="column-title">Prodi</th>
                                    <th class="column-title">Role</th>
                                    <th class="column-title">Tanggal Lahir</th>
                                    <th class="column-title">Telephone</th>
                                    <th class="column-title">Alamat</th>
                                    <th class="bulk-actions" colspan="10">
                                      <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                    </th>
                                  </tr>
                                </thead>

                                <tbody>
                                <?php foreach ($register as $reg): ?>
                                  <?php if( $reg->role ==  "Mahasiswa"): ?>
                                      <tr>
                                        <td class="a-center ">
                                          <input type="checkbox" class="flat" name="table_records" id="table_records">
                                        </td>
                                        <td class=" "><?php echo e($reg->nrp); ?></td>
                                        <td class=" "><?php echo e($reg->nama); ?></td>
                                        <td class=" "><?php echo e($reg->email); ?></td>
                                        <td class=" "><?php echo e($reg->fakultas); ?></td>
                                        <td class=" "><?php echo e($reg->prodi); ?></td>
                                        <td class=" "><?php echo e($reg->role); ?></td>
                                        <td class=" "><?php echo e(date("d-M-Y", strtotime($reg->tanggalLahir))); ?></td>
                                        <td class=" "><?php echo e($reg->telephone); ?></td>
                                        <td class=" "><?php echo e($reg->alamat); ?></td>
                                      </tr>

                                    <?php endif; ?>
                                  <?php endforeach; ?>
                                </tbody>
                              </table>

                              <?php echo e(csrf_field()); ?>

                          </form>
                            </div>
                            <div align="right">



                            </div>

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab2">
                          <br/>
                          <div class="table-responsive">
                              <form action="/superadmin" method="POST">
                              <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                  <tr class="headings">
                                    <th>
                                      <input type="checkbox" id="check-all" class="flat">
                                    </th>
                                    <th class="column-title">NRP/NIK</th>
                                    <th class="column-title">Nama</th>
                                    <th class="column-title">Email</th>
                                    <th class="column-title">Fakultas</th>
                                    <th class="column-title">Prodi</th>
                                    <th class="column-title">Role</th>
                                    <th class="column-title">Tanggal Lahir</th>
                                    <th class="column-title">Telephone</th>
                                    <th class="column-title">Alamat</th>
                                    <th class="bulk-actions" colspan="10">
                                      <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                    </th>
                                  </tr>
                                </thead>

                                <tbody>
                                <?php foreach ($register as $reg): ?>
                                  <?php if($reg->role ==  "Dosen"): ?>
                                      <tr>
                                        <td class="a-center ">
                                          <input type="checkbox" class="flat" name="table_records" id="table_records">
                                        </td>
                                        <td class=" "><?php echo e($reg->nrp); ?></td>
                                        <td class=" "><?php echo e($reg->nama); ?></td>
                                        <td class=" "><?php echo e($reg->email); ?></td>
                                        <td class=" "><?php echo e($reg->fakultas); ?></td>
                                        <td class=" "><?php echo e($reg->prodi); ?></td>
                                        <td class=" "><?php echo e($reg->role); ?></td>
                                        <td class=" "><?php echo e(date("d-M-Y", strtotime($reg->tanggalLahir))); ?></td>
                                        <td class=" "><?php echo e($reg->telephone); ?></td>
                                        <td class=" "><?php echo e($reg->alamat); ?></td>
                                      </tr>

                                    <?php endif; ?>
                                  <?php endforeach; ?>
                                </tbody>
                              </table>

                              <?php echo e(csrf_field()); ?>

                          </form>
                            </div>
                            <div align="right">


                            </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="vendors/build/js/custom.min.js"></script>
<?php $__env->stopSection(); ?>
  </body>
</html>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>