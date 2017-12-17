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

    <!-- Custom styling plus plugins -->
    <link href="vendors/build/css/custom.min.css" rel="stylesheet">
@endsection

@section('content')
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
            <h2>TOP 10th Rank</h2>
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
                              <th class="column-title">Nama Tournament</th>
                              <th class="column-title">Tanggal Tournament </th>
                              <th class="column-title">Creator </th>
                              <th class="column-title">Status </th>
                              <th class="column-title">Point </th>
                              <th class="column-title no-link last"><span class="nobr">Action</span>
                              </th>
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
                              <td class=" ">ITPC</td>
                              <td class=" ">May 23, 2018 11:47:56 PM </td>
                              <td class=" ">John Blank L</td>
                              <td class=" ">Paid</td>
                              <td class="a-right a-right ">100</td>
                              <td class=" last"><a href="#">View</a>
                              </td>
                            </tr>
                            <tr class="odd pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" ">Competitive Programming</td>
                              <td class=" ">Jan 25, 2018 11:30:12 PM</td>
                              <td class=" ">John Blank L</td>
                              <td class=" ">Free</td>
                              <td class="a-right a-right ">10</td>
                              <td class=" last"><a href="#">View</a>
                              </td>
                            </tr>
                            <tr class="even pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" ">Best of IT_2015</td>
                              <td class=" ">May 24, 2018 10:55:33 P</td>
                              <td class=" ">Mike Smith</td>
                              <td class=" ">Free</td>
                              <td class="a-right a-right ">10</td>
                              <td class=" last"><a href="#">View</a>
                              </td>
                            </tr>
                            <tr class="odd pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" ">Tournament Dasar Pemrogramman</td>
                              <td class=" ">May 30, 2018 10:52:44 PM</td>
                              <td class=" ">Mike Smith</td>
                              <td class=" ">Free</td>
                              <td class="a-right a-right ">10</td>
                              <td class=" last"><a href="#">View</a>
                              </td>
                            </tr>
                            <tr class="even pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" ">ICPC</td>
                              <td class=" ">May 24, 2018 11:47:56 PM </td>
                              <td class=" ">Oscar Wongso</td>
                              <td class=" ">Paid</td>
                              <td class="a-right a-right ">150</td>
                              <td class=" last"><a href="#">View</a>
                              </td>
                            </tr>
                            <tr class="odd pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" ">Tournament IF</td>
                              <td class=" ">May 26, 2018 11:30:12 PM</td>
                              <td class=" ">Risal Law</td>
                              <td class=" ">Free</td>
                              <td class="a-right a-right ">50</td>
                              <td class=" last"><a href="#">View</a>
                              </td>
                            </tr>
                            <tr class="even pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" ">Tournament SI</td>
                              <td class=" ">May 26, 2018 10:55:33 PM</td>
                              <td class=" ">Mike Smith</td>
                              <td class=" ">Free</td>
                              <td class="a-right a-right ">50</td>
                              <td class=" last"><a href="#">View</a>
                              </td>
                            </tr>
                            <tr class="odd pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" ">Tournament Asisten Dosen</td>
                              <td class=" ">May 26, 2018 10:52:44 PM</td>
                              <td class=" ">Mike Smith</td>
                              <td class=" ">Free</td>
                              <td class="a-right a-right ">20</td>
                              <td class=" last"><a href="#">View</a>
                              </td>
                            </tr>

                            <tr class="even pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" ">Tournament Dosen</td>
                              <td class=" ">May 27, 2018 11:47:56 PM </td>
                              <td class=" ">Dr.Hapnes Toba</td>
                              <td class=" ">Free</td>
                              <td class="a-right a-right ">0</td>
                              <td class=" last"><a href="#">View</a>
                              </td>
                            </tr>
                            <tr class="odd pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" ">Tournament Angkatan</td>
                              <td class=" ">May 28, 2018 11:30:12 PM</td>
                              <td class=" ">Elvina</td>
                              <td class=" ">Free</td>
                              <td class="a-right a-right ">20</td>
                              <td class=" last"><a href="#">View</a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- modals -->
                      <!-- Large modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" style="float: right;">Daftar</button>

                      <div style="clear: both;"></div>

                      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                              </button>
                              <h4 class="modal-title" id="myModalLabel"><font color="red"><b>ATTENTION !!!</b></font></h4>
                            </div>
                            <div class="modal-body">
                              <h4>Apakah anda yakin akan mendaftar tournament?</h4>
                              <p>Bila sudah mendaftar maka data diri anda akan segera terdaftar</p>
                              <p>Sekian dan terima kasih</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                              <button type="button" class="btn btn-primary">Lanjutkan Pendaftaran</button>
                            </div>

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

  <!-- Custom Theme Scripts -->
  <script src="vendors/build/js/custom.min.js"></script>

@endsection
  </body>
</html>
