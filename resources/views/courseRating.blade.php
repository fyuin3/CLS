@extends('layouts.master')

@section('css')

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="vendors/build/css/custom.min.css" rel="stylesheet">
@endsection

@section('content')
          <!-- page content -->
          <div class="right_col" role="main">
            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>Rating</h3>
                </div>
              </div>

              <div class="clearfix"></div>

              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Course Rating</h2>
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


                      <div style="text-align: center; margin-bottom: 17px">
                        <label for="heard">Pilih Mata Kuliah</label>
                        <select id="heard" class="form-control" required>
                          <!-- <option value="">Pilihan</option> -->
                          <option value="press">IN010 Dasar Pemrograman</option>
                          <option value="net">IN072 Pemrograman Berorientasi Objek A</option>
                          <option value="mouth">IN087 Algoritma dan Struktur data 1</option>
                          <option value="mouth">IN087 Algoritma dan Struktur data 2</option>
                          <option value="mouth">IN062 Strategi Algoritmik </option>
                        </select>
                        <br/>

                            <ul class="verticle_bars list-inline">
                              <li>
                                <div class="progress vertical progress_wide bottom">
                                  <div class="progress-bar progress-bar-dark" role="progressbar" data-transitiongoal="38">38</div>
                                </div>
                              </li>
                              <li>
                                <div class="progress vertical progress_wide bottom">
                                  <div class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="80">80</div>
                                </div>
                              </li>
                              <li>
                                <div class="progress vertical progress_wide bottom">
                                  <div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal="20">20</div>
                                </div>
                              </li>
                              <li>
                                <div class="progress vertical progress_wide bottom">
                                  <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="75">75</div>
                                </div>
                              </li>


                            </ul>
                          </div>
                          <div class="divider"></div>

                          <ul class="legend list-unstyled">
                            <li>
                              <p>
                                <span class="icon"><i class="fa fa-square dark"></i></span> <span class="name">Tidak hadir</span>
                              </p>
                            </li>
                            <li>
                              <p>
                                <span class="icon"><i class="fa fa-square blue"></i></span> <span class="name">Pass</span>
                              </p>
                            </li>
                            <li>
                              <p>
                                <span class="icon"><i class="fa fa-square red "></i></span> <span class="name">Not Pass</span>
                              </p>
                            </li>
                            <li>
                              <p>
                                <span class="icon"><i class="fa fa-square green"></i></span> <span class="name">Downloaded Resorces</span>
                              </p>
                            </li>
                          </ul>


                    </div>
                  </div>
                </div>
              </div>

              <!-- form input knob -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Input Rating</h2>
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
                    <div class="col-md-2">
                      <p>Rate Module</p>
                      <input class="knob" data-width="110" data-height="120" data-displayPrevious=true data-fgColor="#26B99A" data-skin="tron" data-thickness=".2" value="28">
                    </div>
                    <div class="col-md-2">
                      <p>Rate Resources</p>
                      <input class="knob" data-width="110" data-height="120" data-displayPrevious=true data-fgColor="#26B99A" data-skin="tron" data-thickness=".2" value="30">
                    </div>
                    <div class="col-md-2">
                      <p>Rate Quiz</p>
                      <input class="knob" data-width="110" data-height="120" data-displayPrevious=true data-fgColor="#26B99A" data-skin="tron" data-thickness=".2" value="15">
                    </div>
                    <div class="col-md-2">
                      <p>Rate Soal</p>
                      <input class="knob" data-width="110" data-height="120" data-displayPrevious=true data-fgColor="#26B99A" data-skin="tron" data-thickness=".2" value="75">
                    </div>
                    <div class="col-md-2">
                      <p>Rate Dosen</p>
                      <input class="knob" data-width="110" data-height="120" data-displayPrevious=true data-fgColor="#26B99A" data-skin="tron" data-thickness=".2" value="82">
                    </div>
                    <div class="col-md-2">
                      <p>Rate Fasilitas</p>
                      <input class="knob" data-width="110" data-height="120" data-displayPrevious=true data-fgColor="#26B99A" data-skin="tron" data-thickness=".2" value="95">
                    </div>
                    <div align="right"><button type="button" class="btn btn-round btn-primary">Submit</button></div>
                  </div>
                </div>
              </div>
              <!-- /form input knob -->

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
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- jQuery Knob -->
    <script src="vendors/jquery-knob/dist/jquery.knob.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="vendors/build/js/custom.min.js"></script>
@endsection
  </body>
</html>
