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
                <h3>Projects <small>Listing design</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Projects</h2>
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

                    <p></p>

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">Project Name</th>
                          <th>Team Members</th>
                          <th>Project Progress</th>
                          <th>Status</th>
                          <th style="width: 20%">#Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>#</td>
                          <td>
                            <a>Aplikasi parkir dengan Web API C#</a>
                            <br />
                            <small>Created 01.01.2015</small>
                          </td>
                          <td>
                            <ul class="list-inline">
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                            </ul>
                          </td>
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="57"></div>
                            </div>
                            <small>57% Complete</small>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        <tr>
                          <td>#</td>
                          <td>
                            <a>Aplikasi Android Mobile</a>
                            <br />
                            <small>Created 01.01.2015</small>
                          </td>
                          <td>
                            <ul class="list-inline">
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                            </ul>
                          </td>
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="47"></div>
                            </div>
                            <small>47% Complete</small>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        <tr>
                          <td>#</td>
                          <td>
                            <a>Aplikasi Jual Beli </a>
                            <br />
                            <small>Created 01.01.2015</small>
                          </td>
                          <td>
                            <ul class="list-inline">
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                            </ul>
                          </td>
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="77"></div>
                            </div>
                            <small>77% Complete</small>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        <tr>
                          <td>#</td>
                          <td>
                            <a>Aplikasi Social group</a>
                            <br />
                            <small>Created 01.01.2015</small>
                          </td>
                          <td>
                            <ul class="list-inline">
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                            </ul>
                          </td>
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                            </div>
                            <small>60% Complete</small>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        <tr>
                          <td>#</td>
                          <td>
                            <a>Web Perpustakaan</a>
                            <br />
                            <small>Created 01.01.2015</small>
                          </td>
                          <td>
                            <ul class="list-inline">
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                            </ul>
                          </td>
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="12"></div>
                            </div>
                            <small>12% Complete</small>
                          </td>
                          <td>
                            <button type="button" class="btn btn-info btn-xs">Still On Progress</button>
                          </td>
                          <td>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        <tr>
                          <td>#</td>
                          <td>
                            <a>Web E-tiket </a>
                            <br />
                            <small>Created 01.01.2015</small>
                          </td>
                          <td>
                            <ul class="list-inline">
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                            </ul>
                          </td>
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="35"></div>
                            </div>
                            <small>35% Complete</small>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        <tr>
                          <td>#</td>
                          <td>
                            <a>Aplikasi UX experience berbasis web</a>
                            <br />
                            <small>Created 01.01.2015</small>
                          </td>
                          <td>
                            <ul class="list-inline">
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                            </ul>
                          </td>
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="87"></div>
                            </div>
                            <small>87% Complete</small>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        <tr>
                          <td>#</td>
                          <td>
                            <a>Tugas Besar Game Programming</a>
                            <br />
                            <small>Created 01.01.2015</small>
                          </td>
                          <td>
                            <ul class="list-inline">
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                            </ul>
                          </td>
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="77"></div>
                            </div>
                            <small>77% Complete</small>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        <tr>
                          <td>#</td>
                          <td>
                            <a>Tugas Besar Management Proyek Aplikasi Barcode</a>
                            <br />
                            <small>Created 01.01.2015</small>
                          </td>
                          <td>
                            <ul class="list-inline">
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                            </ul>
                          </td>
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="77"></div>
                            </div>
                            <small>77% Complete</small>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="{{ url('/projectDetail') }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- end project list -->

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
