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

                <div class="title_right">
                  <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
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
                            <li><a href="#">A</a></li>
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

                        <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                          <div class="well profile_view">
                            <div class="col-sm-12">
                              <h4 class="brief"><i>Digital Strategist</i></h4>
                              <div class="left col-xs-7">
                                <h2>Nicole Pearson</h2>
                                <p><strong>About: </strong> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                                <ul class="list-unstyled">
                                  <li><i class="fa fa-building"></i> Address: </li>
                                  <li><i class="fa fa-phone"></i> Phone #: </li>
                                </ul>
                              </div>
                              <div class="right col-xs-5 text-center">
                                <img src="images/img.jpg" alt="" class="img-circle img-responsive" style="border:3px solid red;">
                              </div>
                            </div>
                            <div class="col-xs-12 bottom text-center">
                              <div class="col-xs-12 col-sm-6 emphasis">
                                <p class="ratings">
                                  <a>4.0</a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star-o"></span></a>
                                </p>
                              </div>
                              <div class="col-xs-12 col-sm-6 emphasis">
                                <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                  </i> <i class="fa fa-comments-o"></i> </button>
                                <button type="button" class="btn btn-primary btn-xs">
                                  <i class="fa fa-user"> </i> View Profile
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                          <div class="well profile_view">
                            <div class="col-sm-12">
                              <h4 class="brief"><i>Digital Strategist</i></h4>
                              <div class="left col-xs-7">
                                <h2>Nicole Pearson</h2>
                                <p><strong>About: </strong> Web Designer / UI. </p>
                                <ul class="list-unstyled">
                                  <li><i class="fa fa-building"></i> Address: </li>
                                  <li><i class="fa fa-phone"></i> Phone #: </li>
                                </ul>
                              </div>
                              <div class="right col-xs-5 text-center">
                                <img src="images/img.jpg" alt="" class="img-circle img-responsive" style="border:3px solid blue;">
                              </div>
                            </div>
                            <div class="col-xs-12 bottom text-center">
                              <div class="col-xs-12 col-sm-6 emphasis">
                                <p class="ratings">
                                  <a>4.0</a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star-o"></span></a>
                                </p>
                              </div>
                              <div class="col-xs-12 col-sm-6 emphasis">
                                <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                  </i> <i class="fa fa-comments-o"></i> </button>
                                <button type="button" class="btn btn-primary btn-xs">
                                  <i class="fa fa-user"> </i> View Profile
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                          <div class="well profile_view">
                            <div class="col-sm-12">
                              <h4 class="brief"><i>Digital Strategist</i></h4>
                              <div class="left col-xs-7">
                                <h2>Nicole Pearson</h2>
                                <p><strong>About: </strong> Web Designer / UI. </p>
                                <ul class="list-unstyled">
                                  <li><i class="fa fa-building"></i> Address: </li>
                                  <li><i class="fa fa-phone"></i> Phone #: </li>
                                </ul>
                              </div>
                              <div class="right col-xs-5 text-center">
                                <img src="images/img.jpg" alt="" class="img-circle img-responsive" style="border:3px solid yellow;">
                              </div>
                            </div>
                            <div class="col-xs-12 bottom text-center">
                              <div class="col-xs-12 col-sm-6 emphasis">
                                <p class="ratings">
                                  <a>4.0</a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star-o"></span></a>
                                </p>
                              </div>
                              <div class="col-xs-12 col-sm-6 emphasis">
                                <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                  </i> <i class="fa fa-comments-o"></i> </button>
                                <button type="button" class="btn btn-primary btn-xs">
                                  <i class="fa fa-user"> </i> View Profile
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                          <div class="well profile_view">
                            <div class="col-sm-12">
                              <h4 class="brief"><i>Digital Strategist</i></h4>
                              <div class="left col-xs-7">
                                <h2>Nicole Pearson</h2>
                                <p><strong>About: </strong> Web Designer / UI. </p>
                                <ul class="list-unstyled">
                                  <li><i class="fa fa-building"></i> Address: </li>
                                  <li><i class="fa fa-phone"></i> Phone #: </li>
                                </ul>
                              </div>
                              <div class="right col-xs-5 text-center">
                                <img src="images/img.jpg" alt="" class="img-circle img-responsive" style="border:3px solid green;">
                              </div>
                            </div>
                            <div class="col-xs-12 bottom text-center">
                              <div class="col-xs-12 col-sm-6 emphasis">
                                <p class="ratings">
                                  <a>4.0</a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star-o"></span></a>
                                </p>
                              </div>
                              <div class="col-xs-12 col-sm-6 emphasis">
                                <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                  </i> <i class="fa fa-comments-o"></i> </button>
                                <button type="button" class="btn btn-primary btn-xs">
                                  <i class="fa fa-user"> </i> View Profile
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                          <div class="well profile_view">
                            <div class="col-sm-12">
                              <h4 class="brief"><i>Digital Strategist</i></h4>
                              <div class="left col-xs-7">
                                <h2>Nicole Pearson</h2>
                                <p><strong>About: </strong> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                                <ul class="list-unstyled">
                                  <li><i class="fa fa-building"></i> Address: </li>
                                  <li><i class="fa fa-phone"></i> Phone #: </li>
                                </ul>
                              </div>
                              <div class="right col-xs-5 text-center">
                                <img src="images/img.jpg" alt="" class="img-circle img-responsive" style="border:3px solid purple;">
                              </div>
                            </div>
                            <div class="col-xs-12 bottom text-center">
                              <div class="col-xs-12 col-sm-6 emphasis">
                                <p class="ratings">
                                  <a>4.0</a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star-o"></span></a>
                                </p>
                              </div>
                              <div class="col-xs-12 col-sm-6 emphasis">
                                <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                  </i> <i class="fa fa-comments-o"></i> </button>
                                <button type="button" class="btn btn-primary btn-xs">
                                  <i class="fa fa-user"> </i> View Profile
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                          <div class="well profile_view">
                            <div class="col-sm-12">
                              <h4 class="brief"><i>Digital Strategist</i></h4>
                              <div class="left col-xs-7">
                                <h2>Nicole Pearson</h2>
                                <p><strong>About: </strong> Web Designer / UI. </p>
                                <ul class="list-unstyled">
                                  <li><i class="fa fa-building"></i> Address: </li>
                                  <li><i class="fa fa-phone"></i> Phone #: </li>
                                </ul>
                              </div>
                              <div class="right col-xs-5 text-center">
                                <img src="images/img.jpg" alt="" class="img-circle img-responsive" style="border:3px solid lime;">
                              </div>
                            </div>
                            <div class="col-xs-12 bottom text-center">
                              <div class="col-xs-12 col-sm-6 emphasis">
                                <p class="ratings">
                                  <a>4.0</a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star-o"></span></a>
                                </p>
                              </div>
                              <div class="col-xs-12 col-sm-6 emphasis">
                                <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                  </i> <i class="fa fa-comments-o"></i> </button>
                                <button type="button" class="btn btn-primary btn-xs">
                                  <i class="fa fa-user"> </i> View Profile
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                          <div class="well profile_view">
                            <div class="col-sm-12">
                              <h4 class="brief"><i>Digital Strategist</i></h4>
                              <div class="left col-xs-7">
                                <h2>Nicole Pearson</h2>
                                <p><strong>About: </strong> Web Designer / UI. </p>
                                <ul class="list-unstyled">
                                  <li><i class="fa fa-building"></i> Address: </li>
                                  <li><i class="fa fa-phone"></i> Phone #: </li>
                                </ul>
                              </div>
                              <div class="right col-xs-5 text-center">
                                <img src="images/img.jpg" alt="" class="img-circle img-responsive" style="border:3px solid pink;">
                              </div>
                            </div>
                            <div class="col-xs-12 bottom text-center">
                              <div class="col-xs-12 col-sm-6 emphasis">
                                <p class="ratings">
                                  <a>4.0</a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star-o"></span></a>
                                </p>
                              </div>
                              <div class="col-xs-12 col-sm-6 emphasis">
                                <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                  </i> <i class="fa fa-comments-o"></i> </button>
                                <button type="button" class="btn btn-primary btn-xs">
                                  <i class="fa fa-user"> </i> View Profile
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                          <div class="well profile_view">
                            <div class="col-sm-12">
                              <h4 class="brief"><i>Digital Strategist</i></h4>
                              <div class="left col-xs-7">
                                <h2>Nicole Pearson</h2>
                                <p><strong>About: </strong> Web Designer / UI. </p>
                                <ul class="list-unstyled">
                                  <li><i class="fa fa-building"></i> Address: </li>
                                  <li><i class="fa fa-phone"></i> Phone #: </li>
                                </ul>
                              </div>
                              <div class="right col-xs-5 text-center">
                                <img src="images/img.jpg" alt="" class="img-circle img-responsive">
                              </div>
                            </div>
                            <div class="col-xs-12 bottom text-center">
                              <div class="col-xs-12 col-sm-6 emphasis">
                                <p class="ratings">
                                  <a>4.0</a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star-o"></span></a>
                                </p>
                              </div>
                              <div class="col-xs-12 col-sm-6 emphasis">
                                <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                  </i> <i class="fa fa-comments-o"></i> </button>
                                <button type="button" class="btn btn-primary btn-xs">
                                  <i class="fa fa-user"> </i> View Profile
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                          <div class="well profile_view">
                            <div class="col-sm-12">
                              <h4 class="brief"><i>Digital Strategist</i></h4>
                              <div class="left col-xs-7">
                                <h2>Nicole Pearson</h2>
                                <p><strong>About: </strong> Web Designer / UI. </p>
                                <ul class="list-unstyled">
                                  <li><i class="fa fa-building"></i> Address: </li>
                                  <li><i class="fa fa-phone"></i> Phone #: </li>
                                </ul>
                              </div>
                              <div class="right col-xs-5 text-center">
                                <img src="images/img.jpg" alt="" class="img-circle img-responsive">
                              </div>
                            </div>
                            <div class="col-xs-12 bottom text-center">
                              <div class="col-xs-12 col-sm-6 emphasis">
                                <p class="ratings">
                                  <a>4.0</a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star-o"></span></a>
                                </p>
                              </div>
                              <div class="col-xs-12 col-sm-6 emphasis">
                                <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                  </i> <i class="fa fa-comments-o"></i> </button>
                                <button type="button" class="btn btn-primary btn-xs">
                                  <i class="fa fa-user"> </i> View Profile
                                </button>
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
