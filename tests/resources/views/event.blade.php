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
    <!-- PNotify -->
    <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
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
                  <h3>Event</h3>
                </div>
              </div>

              <div class="clearfix"></div>

              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2></h2>
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
                      <div class="col-xs-9">
                       <!-- Tab panes -->
                       <div class="tab-content">
                         <div class="tab-pane active" id="pretest">
                           <p class="lead">PRE TEST</p>
                                       <!-- start form for validation -->

                                <form id="demo-form" data-parsley-validate>
                                  <label for="heard">Pilih Mata Kuliah</label>
                                  <select id="heard" class="form-control" required>
                                    <!-- <option value="">Pilihan</option> -->
                                    <option value="press">IN010 Dasar Pemrograman</option>
                                    <option value="net">IN072 Pemrograman Berorientasi Objek A</option>
                                    <option value="mouth">IN087 Algoritma dan Struktur data 1</option>
                                    <option value="mouth">IN087 Algoritma dan Struktur data 2</option>
                                    <option value="mouth">IN062 Strategi Algoritmik </option>

                                  </select>

                                  <table>
                                      <tr>
                                          <td>Judul</td>
                                          <td>:</td>
                                          <td>Pre test Perulangan</td>
                                      </tr>
                                      <tr>
                                          <td>Tanggal</td>
                                          <td>:</td>
                                          <td>Selasa,27 Oktober 2017</td>
                                      </tr>
                                      <tr>
                                          <td>Waktu</td>
                                          <td>:</td>
                                          <td>08.00 - 10.00</td>
                                      </tr>
                                  </table>

                                      <br/>
                                      <span class="btn btn-primary">Mulai Pre Test</span>

                                </form>
                                <!-- end form for validations -->
                         </div>

                        <div class="tab-pane" id="soalpre">
                          <table>
                            <tr>
                                <td>Soal 30/30 </td>
                            </tr>
                            <tr>
                                <td>Apa nama jenis perulangan yang memiliki variabel untuk melakukan pengkondisian tetapi tidak semua elementnya dikunjungi ?</td>
                            </tr>
                            <br/>
                          </table>

                          <div class="radio">
                           <label>
                             <input type="radio" class="flat" checked name="iCheck"> For
                           </label>
                         </div>
                         <div class="radio">
                           <label>
                             <input type="radio" class="flat" name="iCheck"> While
                           </label>
                         </div>
                         <div class="radio">
                           <label>
                             <input type="radio" class="flat" name="iCheck"> do-while
                           </label>
                         </div>
                         <div class="radio">
                           <label>
                             <input type="radio" class="flat" name="iCheck"> break
                           </label>
                         </div>
                         <div class="radio">
                           <label>
                             <input type="radio" class="flat" name="iCheck"> Foreach
                           </label>
                         </div>
                            <br/>
                            <button class="btn btn-primary" type="button">Back</button>
 						                <button class="btn btn-primary" type="reset">Next</button>
                            <button type="submit" class="btn btn-success">Terminate</button>
                        </div>

                         <div class="tab-pane" id="posttest">POST TEST</div>

                         <div class="tab-pane" id="soalpost">
                           <table>
                             <tr>
                                 <td>Soal 2/30 </td>
                             </tr>
                             <tr>
                                 <td>Apa nama jenis perulangan yang memiliki variabel untuk melakukan pengkondisian tetapi tidak semua elementnya dikunjungi ?</td>
                             </tr>
                             <br/>
                           </table>

                           <div class="radio">
                            <label>
                              <input type="radio" class="flat" checked name="iCheck"> For
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" class="flat" name="iCheck"> While
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" class="flat" name="iCheck"> do-while
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" class="flat" name="iCheck"> break
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" class="flat" name="iCheck"> Foreach
                            </label>
                          </div>
                          <br/>
                           <button class="btn btn-primary" type="button">Back</button>
  						             <button class="btn btn-primary" type="reset">Next</button>
                         </div>

                         <div class="tab-pane" id="quiz">Quiz</div>
                         <div class="tab-pane" id="survey">Survey</div>
                         <div class="tab-pane" id="riddles">Riddles Collection</div>
                       </div>
                     </div>

                     <div class="col-xs-3">
                       <!-- required for floating -->
                       <!-- Nav tabs -->
                       <ul class="nav nav-tabs tabs-right">
                         <li class="active"><a href="#soalpre" data-toggle="tab">PRE TEST</a></li>
                         <li><a href="#posttest" data-toggle="tab">POST TEST</a></li>
                         <li><a href="#quiz" data-toggle="tab">Quiz</a></li>
                         <li><a href="#survey" data-toggle="tab">Survey</a></li>
                          <li><a href="#riddles" data-toggle="tab">Riddles Collection</a></li>
                       </ul>
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
@endsection
  </body>
</html>
