@extends('layouts.master')

@section('css')

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
@endsection

@section('content')
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
                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                          <thead>
                            <tr class="headings">
                              <th>
                                <input type="checkbox" id="check-all" class="flat">
                              </th>
                              <th class="column-title">NRP/NIK</th>
                              <th class="column-title">Last Updated</th>
                              <th class="column-title">Role </th>
                              <th class="column-title">Actor </th>
                              <th class="column-title">Status</th>
                              <th class="column-title">Action</th>
                              <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                              </th>
                            </tr>
                          </thead>

                          <tbody>
                            <tr class="even pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" ">1472088</td>
                              <td class=" ">May 23, 2014 11:47:56 PM </td>
                              <td class=" ">Super Admin</i></td>
                              <td class=" ">Steven Yong</td>
                              <td class=" ">Aktif</td>
                              <td class=" last"><input type="button" value="Edit"></a></td>
                            </tr>
                            <tr class="odd pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" ">1472027</td>
                              <td class=" ">May 23, 2014 11:47:56 PM </td>
                              <td class=" ">Mahasiswa</td>
                              <td class=" ">Yorenvo</td>
                              <td class=" ">Aktif</td>
                              <td class=" last"><input type="button" value="Edit"></a></td>
                            </tr>
                            <tr class="even pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" ">1472019</td>
                              <td class=" ">May 23, 2014 11:47:56 PM </td>
                              <td class=" ">Mahasiswa</td>
                              <td class=" ">Jeson Orlando</td>
                              <td class=" ">Tidak Aktif</td>
                              <td class=" last"><input type="button" value="Edit"></a></td>
                            </tr>
                            <tr class="odd pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" ">1472013</td>
                              <td class=" ">May 23, 2014 11:47:56 PM </td>
                              <td class=" ">Mahasiswa</td>
                              <td class=" ">Jason Alexander</td>
                              <td class=" ">Aktif</td>
                              <td class=" last"><input type="button" value="Edit"></a></td>
                              </td>
                            </tr>
                            <tr class="even pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" ">7207272</td>
                              <td class=" ">May 23, 2014 11:47:56 PM </td>
                              <td class=" ">Dosen</td>
                              <td class=" ">Oscar Wongso</td>
                              <td class=" ">Aktif</td>
                              <td class=" last"><input type="button" value="Edit"></a></td>
                              </td>
                            </tr>
                            <tr class="odd pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" ">1472008</td>
                              <td class=" ">May 23, 2014 11:47:56 PM </td>
                              <td class=" ">Mahasiswa</td>
                              <td class=" ">Chandra Vincent Grafianto</td>
                              <td class=" ">Aktif</td>
                              <td class=" last"><input type="button" value="Edit"></a></td>
                              </td>
                            </tr>
                            <tr class="even pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" ">1472011</td>
                              <td class=" ">May 23, 2014 11:47:56 PM </td>
                              <td class=" ">Mahasiswa</td>
                              <td class=" ">James Asrah</td>
                              <td class=" ">Aktif</td>
                              <td class=" last"><input type="button" value="Edit"></a></td>
                            </tr>
                            <tr class="odd pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" ">1472067</td>
                              <td class=" ">May 23, 2014 11:47:56 PM </td>
                              <td class=" ">Mahasiswa</td>
                              <td class=" ">Andy Pratama</td>
                              <td class=" ">Aktif</td>
                              <td class=" last"><input type="button" value="Edit"></a></td>
                            </tr>

                            <tr class="even pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" ">1472019</td>
                              <td class=" ">May 23, 2014 11:47:56 PM </td>
                              <td class=" ">Mahasiswa</td>
                              <td class=" ">Raynald</td>
                              <td class=" ">Aktif</td>
                              <td class=" last"><input type="button" value="Edit"></a></td>
                            </tr>
                            <tr class="odd pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" ">720022</td>
                              <td class=" ">May 23, 2014 11:47:56 PM </td>
                              <td class=" ">Dosen</td>
                              <td class=" ">Tanti Kristanti</td>
                              <td class=" ">Tidak Aktif</td>
                              <td class=" last"><input type="button" value="Edit"></a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div align="right">
                        <input type="button" value="Delete">&nbsp;<input type="button" value="Add">
                      </div>
@endsection


@section('js')

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
@endsection
  </body>
</html>
