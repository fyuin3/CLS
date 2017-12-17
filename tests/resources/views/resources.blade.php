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
    <!-- FullCalendar -->
    <link href="vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">

    <!-- Custom styling plus plugins -->
    <link href="vendors/build/css/custom.min.css" rel="stylesheet">

@endsection

@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Resources</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Module Perkuliahan</h2>
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
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Semester 1</a></li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Semester 2</a></li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Semester 3</a></li>
                        <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Semester 4</a></li>
                        <li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab4" data-toggle="tab" aria-expanded="false">Semester 5</a></li>
                        <li role="presentation" class=""><a href="#tab_content6" role="tab" id="profile-tab5" data-toggle="tab" aria-expanded="false">Semester 6</a></li>
                        <li role="presentation" class=""><a href="#tab_content7" role="tab" id="profile-tab6" data-toggle="tab" aria-expanded="false">Semester 7</a></li>
                        <li role="presentation" class=""><a href="#tab_content8" role="tab" id="profile-tab7" data-toggle="tab" aria-expanded="false">Semester 8</a></li>
                        <li role="presentation" class=""><a href="#tab_content9" role="tab" id="profile-tab8" data-toggle="tab" aria-expanded="false">Jalur Game dan Mobile</a></li>
                        <li role="presentation" class=""><a href="#tab_content10" role="tab" id="profile-tab9" data-toggle="tab" aria-expanded="false">Jalur Web dan Multimedia</a></li>
                        <li role="presentation" class=""><a href="#tab_content11" role="tab" id="profile-tab10" data-toggle="tab" aria-expanded="false">Jalur Komputasi Cerdas</a></li>
                        <li role="presentation" class=""><a href="#tab_content12" role="tab" id="profile-tab11" data-toggle="tab" aria-expanded="false">Jalur Sekuritas dan Jaringan</a></li>
                        <br/>
                        <br/>
                        <br/>
                      </ul>
                      <div id="myTabContent" class="tab-content">

                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                          <br/>
                          <p>
                              <a href="#">IN010 Dasar Pemrograman</a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star-o"></span></a><br/>
                              <a href="#">IN011 Pengantar Teknologi Informasi</a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star-o"></span></a><br/>
                              <a href="#">IN013 Matematika Informatika</a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star-o"></span></a><br/>
                              <a href="#">IN014 Bahasa Inggris 1</a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star-o"></span></a><br/>
                              <a href="#">MK024 Kewarganegaraan</a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star-o"></span></a><br/>
                              <a href="#">MK060 Fenomenologi Agama</a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star-o"></span></a><br/>
                              <a href="#">MK062 Pendidikan Agama Kristen</a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star-o"></span></a><br/>
                          </p>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                          <br/>
                          <p>
                              <a href="#">IN020 Algoritma dan Struktur Data 1</a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star-o"></span></a><br/>
                          </p>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab2">
                          <br/>
                          <p>
                            <a href="#">IN030 Algoritma dan Struktur Data 2</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>
                            <a href="#">IN031 Basis Data 1</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>
                            <a href="#">IN032 Rekayasa Perangkat Lunak 1</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>
                            <a href="#">IN033 Pengantar Arsitektur Komputer</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>
                            <a href="#">IN034 Teknologi Multimedia 1</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>
                            <a href="#">IN035 Matematika Diskrit</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>
                            <a href="#">MK039 Bahasa Indonesia</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>

                          </p>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab3">
                          <br/>
                          <p>
                            <a href="#">IN040 Pemrograman Berorientasi Objek 1 A*)</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>
                            <a href="#">IN041 Pemrograman Berorientasi Objek 1 B*)</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>
                          </p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab4">
                          <br/>
                          <p>
                            <a href="#">IN050 Pemrograman Berorientasi Objek 2 A *)</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>
                            <a href="#">IN051 Pemrograman Berorientasi Objek 2 B *)</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>
                            <a href="#">IN052 Pemrograman Web 2</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>
                            <a href="#">IN053 Strategi Algoritmik</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>
                            <a href="#">IN054 Manajemen Proyek</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>
                            <a href="#">IN055 Proses Bisnis</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>
                          </p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="profile-tab5">
                          <br/>
                          <p>
                                <a href="#">IN065 Kerja Praktek</a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a><br/>
                          </p>
                        </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content7" aria-labelledby="profile-tab6">
                            <br/>
                            <p>
                              <a href="#">IN070 Seminar Tugas Akhir</a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star-o"></span></a>
                              <a href="#"><span class="fa fa-star-o"></span></a><br/>
                              <a href="#">MK061 Etika Profesi</a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star-o"></span></a><br/>
                              <a href="#">MK037 Kepemimpinan</a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star-o"></span></a>
                              <a href="#"><span class="fa fa-star-o"></span></a><br/>
                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content8" aria-labelledby="profile-tab7">
                          <br/>
                          <p>
                            <a href="#">IN080 Tugas Akhir</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>
                            <a href="#">IN081 Kapita Selekta</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>
                          </p>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content9" aria-labelledby="profile-tab8">
                          <br/>
                          <p>
                            <a href="#">IN151 Pengenalan Pemrograman Game</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>
                            <a href="#">IN076 Pola Desain Perangkat Lunak</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>
                          </p>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content10" aria-labelledby="profile-tab9">
                          <br/>
                          <p>
                              <a href="#">IN163 Web Semantik</a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star-o"></span></a>
                              <a href="#"><span class="fa fa-star-o"></span></a><br/>
                          </p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content11" aria-labelledby="profile-tab10">
                          <br/>
                          <p>
                            <a href="#">IN068 Competitive Programming</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>
                            <a href="#">IN085 Pemrosesan Bahasa Alami</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>
                          </p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content12" aria-labelledby="profile-tab11">
                          <br/>
                          <p>
                            <a href="#">IN058 Ethical Hacking 1</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>
                            <a href="#">IN079 Ethical Hacking 2</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>
                            <a href="#">IN088 Administrasi Sistem</a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a>
                            <a href="#"><span class="fa fa-star-o"></span></a><br/>
                          </p>
                        </div>


                      </div>
                    </div>

                  </div>
                </div>
              </div>


              <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Bank Soal</h2>
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
                      <ul id="myTab1" class="nav nav-tabs bar_tabs right" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content21" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Semester 1</a></li>
                        <li role="presentation" class=""><a href="#tab_content22" role="tab" id="profile-tab22" data-toggle="tab" aria-expanded="false">Semester 2</a></li>
                        <li role="presentation" class=""><a href="#tab_content23" role="tab" id="profile-tab23" data-toggle="tab" aria-expanded="false">Semester 3</a></li>
                        <li role="presentation" class=""><a href="#tab_content24" role="tab" id="profile-tab24" data-toggle="tab" aria-expanded="false">Semester 4</a></li>
                        <li role="presentation" class=""><a href="#tab_content25" role="tab" id="profile-tab25" data-toggle="tab" aria-expanded="false">Semester 5</a></li>
                        <li role="presentation" class=""><a href="#tab_content26" role="tab" id="profile-tab26" data-toggle="tab" aria-expanded="false">Semester 6</a></li>
                        <li role="presentation" class=""><a href="#tab_content27" role="tab" id="profile-tab27" data-toggle="tab" aria-expanded="false">Semester 7</a></li>
                        <li role="presentation" class=""><a href="#tab_content28" role="tab" id="profile-tab28" data-toggle="tab" aria-expanded="false">Semester 8</a></li>
                        <li role="presentation" class=""><a href="#tab_content29" role="tab" id="profile-tab29" data-toggle="tab" aria-expanded="false">Jalur Game dan Mobile</a></li>
                        <li role="presentation" class=""><a href="#tab_content30" role="tab" id="profile-tab30" data-toggle="tab" aria-expanded="false">Jalur Web dan Multimedia</a></li>
                        <li role="presentation" class=""><a href="#tab_content31" role="tab" id="profile-tab31" data-toggle="tab" aria-expanded="false">Jalur Komputasi Cerdas</a></li>
                        <li role="presentation" class=""><a href="#tab_content32" role="tab" id="profile-tab32" data-toggle="tab" aria-expanded="false">Jalur Sekuritas dan Jaringan</a></li>
                        <br/>
                        <br/>
                        <br/>
                      </ul>
                      <div id="myTabContent2" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content21" aria-labelledby="home-tab">
                          <p>
                            <!-- start accordion -->
                          <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
                            <div class="panel">
                              <br/>
                              <a class="panel-heading" role="tab" id="headingOne1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                                <h4 class="panel-title">IN010 Dasar Pemrograman</h4>
                              </a>
                              <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                  <p><strong>Soal Dasar Pemrograman</strong>
                                  </p>
                                  <a href="#"><i class="fa fa-download"></i>Kuis01_Daspro_IF</a><br/>
                                  <a href="#"><i class="fa fa-download"></i>Kuis02_Daspro_IF</a><br/>
                                  <a href="#"><i class="fa fa-download"></i>Kuis03_Daspro_IF</a><br/>
                                  <a href="#"><i class="fa fa-download"></i>Latihan Matrix</a><br/>
                              </div>
                            </div>

                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingTwo1" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
                          <h4 class="panel-title">	IN011 Pengantar Teknologi Informasi</h4>
                        </a>
                        <div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                            <p><strong>Soal Dasar Pemrograman</strong>
                            </p>
                            <a href="#"><i class="fa fa-download"></i>Soal Latihan UTS</a><br/>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingThree1" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1" aria-expanded="false" aria-controls="collapseThree">
                          <h4 class="panel-title">	IN013 Matematika Informatika</h4>
                        </a>
                        <div id="collapseThree1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                            <p><strong>Soal Matematika Informatika</strong>
                            </p>
                            <a href="#"><i class="fa fa-download"></i>Take Home Test</a><br/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel">
                      <a class="panel-heading collapsed" role="tab" id="headingFour1" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1" aria-expanded="false" aria-controls="collapseFour">
                        <h4 class="panel-title">IN014 Bahasa Inggris 1</h4>
                      </a>
                      <div id="collapseFour1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                          <p><strong>Soal Bahasa Inggris</strong>
                          </p>
                          <a href="#"><i class="fa fa-download"></i>Kuis01</a><br/>
                        </div>
                      </div>
                    </div>
                    <div class="panel">
                      <a class="panel-heading collapsed" role="tab" id="headingFive1" data-toggle="collapse" data-parent="#accordion1" href="#collapseFive1" aria-expanded="false" aria-controls="collapseFive">
                        <h4 class="panel-title">MK060 Fenomenologi Agama</h4>
                      </a>
                      <div id="collapseFive1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">
                          <p><strong>Soal Fenomenologi Agama</strong>
                          </p>
                          <a href="#"><i class="fa fa-download"></i>Kuis01</a><br/>
                        </div>
                      </div>
                    </div>
                  <div class="panel">
                    <a class="panel-heading collapsed" role="tab" id="headingSix1" data-toggle="collapse" data-parent="#accordion1" href="#collapseSix1" aria-expanded="false" aria-controls="collapseSix">
                      <h4 class="panel-title">MK062 Pendidikan Agama Kristen </h4>
                    </a>
                    <div id="collapseSix1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                      <div class="panel-body">
                        <p><strong>Soal Pendidikan Agama Kristen</strong>
                        </p>
                        <a href="#"><i class="fa fa-download"></i>Kuis01</a><br/>
                      </div>
                    </div>
                  </div>


                  </div>

                    <!-- end of accordion -->


                </div>

                <div role="tabpanel" class="tab-pane fade" id="tab_content22" aria-labelledby="profile22-tab">
                  <p>
                    <!-- start accordion -->
                  <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
                    <div class="panel">
                      <a class="panel-heading" role="tab" id="headingSeven1" data-toggle="collapse" data-parent="#accordion1" href="#collapseSeven1" aria-expanded="false" aria-controls="collapseSeven">
                        <h4 class="panel-title">	IN020 Algoritma dan Struktur Data 1</h4>
                      </a>
                      <div id="collapseSeven1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSeven">
                        <div class="panel-body">
                          <p><strong>Soal Algoritma dan Struktur data 1</strong>
                          </p>
                          <a href="#"><i class="fa fa-download"></i>Kuis01_ASD1</a><br/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div role="tabpanel" class="tab-pane fade" id="tab_content23" aria-labelledby="profile23-tab">
                <p>
                  <!-- start accordion -->
                <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
                  <div class="panel">
                    <a class="panel-heading" role="tab" id="headingEight1" data-toggle="collapse" data-parent="#accordion1" href="#collapseEight1" aria-expanded="false" aria-controls="collapseEight">
                      <h4 class="panel-title">	IN030 Algoritma dan Struktur Data 2</h4>
                    </a>
                    <div id="collapseEight1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingEight">
                      <div class="panel-body">
                        <p><strong>Soal Algoritma dan Struktur data 2</strong>
                        </p>
                        <a href="#"><i class="fa fa-download"></i>Kuis01_ASD2</a><br/>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <a class="panel-heading collapsed" role="tab" id="headingNine1" data-toggle="collapse" data-parent="#accordion1" href="#collapseNine1" aria-expanded="false" aria-controls="collapseNine">
                    <h4 class="panel-title">		IN031 Basis Data 1</h4>
                  </a>
                  <div id="collapseNine1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                    <div class="panel-body">
                      <p><strong>Soal Basis Data 1</strong>
                      </p>
                      <a href="#"><i class="fa fa-download"></i>Kuis01_BD1</a><br/>
                      <a href="#"><i class="fa fa-download"></i>Kuis02_BD1</a><br/>
                      <a href="#"><i class="fa fa-download"></i>Kuis03_BD1</a><br/>
                      <a href="#"><i class="fa fa-download"></i>Kuis04_BD1</a><br/>

                  </div>
                </div>
              </div>
              <div class="panel">
                <a class="panel-heading collapsed" role="tab" id="headingTen1" data-toggle="collapse" data-parent="#accordion1" href="#collapseTen1" aria-expanded="false" aria-controls="collapseTen">
                  <h4 class="panel-title">		IN032 Rekayasa Perangkat Lunak 1</h4>
                </a>
                <div id="collapseTen1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                  <div class="panel-body">
                    <p><strong>Soal Rekayasa Perangkat Lunak 1</strong>
                    </p>
                    <a href="#"><i class="fa fa-download"></i>Kuis01_RPL1</a><br/>
                    <a href="#"><i class="fa fa-download"></i>Kuis02_RPL1</a><br/>
                    <a href="#"><i class="fa fa-download"></i>Kuis03_RPL1</a><br/>
                </div>
              </div>
            </div>
            <div class="panel">
              <a class="panel-heading collapsed" role="tab" id="headingEleven1" data-toggle="collapse" data-parent="#accordion1" href="#collapseEleven1" aria-expanded="false" aria-controls="collapseEleven">
                <h4 class="panel-title">	IN033 Pengantar Arsitektur Komputer</h4>
              </a>
              <div id="collapseEleven1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
                <div class="panel-body">
                  <p><strong>Soal Pengatar Arsitektur Komputer</strong>
                  </p>
                  <a href="#"><i class="fa fa-download"></i>Kuis01_PAK</a><br/>
                  <a href="#"><i class="fa fa-download"></i>Kuis02_PAK</a><br/>
              </div>
            </div>
          </div>
              </div>
            </div>
            <!-- end of accordion -->


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

    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- FullCalendar -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/fullcalendar/dist/fullcalendar.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="vendors/build/js/custom.min.js"></script>
@endsection
  </body>
</html>
