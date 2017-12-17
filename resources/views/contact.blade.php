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

    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="vendors/build/css/custom.min.css" rel="stylesheet">

@endsection

@section('content')
          <!-- page content -->
          <div class="right_col" role="main">
            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>Contacts Design</h3>
                </div>
              </div>

              <div class="clearfix"></div>

              <div class="row">
                <div class="col-md-12">
                  <div class="x_panel">
                    <div class="x_content">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                          <ul class="pagination pagination-split">
                            <li><a href="#" name="a">A</a></li>
                            <li><a href="#">B</a></li>
                            <li><a href="#">C</a></li>
                            <li><a href="#">D</a></li>
                            <li><a href="#">E</a></li>
                            <li><a href="#">F</a></li>
                            <li><a href="#">G</a></li>
                            <li><a href="#">H</a></li>
                            <li><a href="#">I</a></li>
                            <li><a href="#">J</a></li>
                            <li><a href="#">K</a></li>
                            <li><a href="#">L</a></li>
                            <li><a href="#">M</a></li>
                            <li><a href="#">N</a></li>
                            <li><a href="#">O</a></li>
                            <li><a href="#">P</a></li>
                            <li><a href="#">Q</a></li>
                            <li><a href="#">R</a></li>
                            <li><a href="#">S</a></li>
                            <li><a href="#">T</a></li>
                            <li><a href="#">U</a></li>
                            <li><a href="#">V</a></li>
                            <li><a href="#">W</a></li>
                            <li><a href="#">X</a></li>
                            <li><a href="#">Y</a></li>
                            <li><a href="#">Z</a></li>
                          </ul>
                        </div>

                        <div class="clearfix"></div>
                        <?php foreach ($register as $reg): ?>

                          <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                            <div class="well profile_view">
                              <div class="col-sm-12">
                                <h4 class="brief"><i>{{$reg->nrp}}</i></h4>
                                <div class="left col-xs-7">
                                  <h2>{{$reg->nama}}</h2>
                                  <ul class="list-unstyled">
                                    <li><i class="fa fa-male"></i> {{$reg->role}} </li>
                                    <li><i class="fa fa-globe"></i> {{$reg->kota}} </li>
                                    <li><i class="fa fa-calendar"></i> {{$reg->tanggalLahir}} </li>
                                    <li><i class="fa fa-building"></i> {{$reg->alamat}} </li>
                                    <li><i class="fa fa-phone"></i>{{$reg->telephone}}</li>
                                  </ul>
                                </div>
                                <div class="right col-xs-5 text-center">
                                  <img src="images/user.png" alt="" class="img-circle img-responsive" style="border:3px solid {{$reg->warna}};">
                                </div>
                              </div>
                              <div class="col-xs-12 bottom text-center">
                                <div class="col-xs-12 col-sm-6 emphasis">
                                  <button type="button" class="btn btn-primary btn-xs" href="{{Url('/profile')}}">
                                    <i class="fa fa-user"> </i> View Profile
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>

                        <?php endforeach; ?>





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
    <!-- gauge.js -->
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- morris.js -->
    <script src="vendors/raphael/raphael.min.js"></script>
    <script src="vendors/morris.js/morris.min.js"></script>
    <!-- DateJS -->
    <script src="vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="vendors/build/js/custom.min.js"></script>
@endsection
  </body>
</html>
