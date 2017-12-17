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
                <h3>Leaderboard <small></small></h3>
              </div>
            </div>

            <div class="clearfix"></div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>TOP 10 Rank<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="card-box table-responsive">
                                    <table id="datatable-keytable" class="table table-striped table-bordered" style="color:black">
                                      <thead>
                                        <tr>
                                          <th>Nama</th>
                                          <th>NRP</th>
                                          <th><img src="images/gold.jpg" width="5%" heihgt="5%">Emas (5 Point)</th>
                                          <th><img src="images/silver.jpg" width="5%" heihgt="5%">Perak (3 Point)</th>
                                          <th><img src="images/bronzed.jpg" width="5%" heihgt="5%">Perungguu (1 Point)</th>
                                          <th>Total Point</th>
                                        </tr>
                                      </thead>

                                      <tbody>

                                      <?php foreach ($leaderboard as $lead): ?>
                                        <tr>
                                          <td>{{$lead->nama}}</td>
                                          <td>{{$lead->nrp}}</td>
                                          <td>{{$lead->emas}}</td>
                                          <td>{{$lead->perak}}</td>
                                          <td>{{$lead->perunggu}}</td>
                                          <td>{{$lead->total}}</td>
                                        </tr>
                                      <?php endforeach; ?>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>


                              <div align="center">
                                {!! $leaderboard->links() !!}
                              </div>

                              <!-- <div>
                                <table>
                                    <tr>
                                      <td>{{$log}}</td>
                                    </tr>
                                </table>

                              </div> -->



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
