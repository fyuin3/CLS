<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Course Learning System</title>

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
    <!-- Ionicons -->
    <link rel="stylesheet" href="vendors/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="vendors/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->

    <!-- Custom Theme Style -->
    <link href="vendors/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-sm">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo e(url('/home')); ?>" class="site_title"><i class="fa fa-code"></i> <span>Course Learning System</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
              <div class="profile clearfix">
                <div class="profile_pic">
                  <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                  <h2>Steven Yong</h2>
                  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
              </div>
              <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo e(url('/home')); ?>"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a></li>
                  <li><a href="<?php echo e(url('/project')); ?>"><i class="fa fa-edit"></i> Project <span class="fa fa-chevron-down"></span></a></li>
                  <li><a href="<?php echo e(url('/contact')); ?>"><i class="fa fa-desktop"></i> Contact <span class="fa fa-chevron-down"></span></a></li>
                  <li><a href="<?php echo e(url('/calendar')); ?>"><i class="fa fa-table"></i> Calendar <span class="fa fa-chevron-down"></span></a></li>
                  <li><a href="<?php echo e(url('/leaderboard')); ?>"><i class="fa fa-bar-chart-o"></i> Leaderboard <span class="fa fa-chevron-down"></span></a></li>
                  <li><a href="<?php echo e(url('/inbox')); ?>"><i class="fa fa-clone"></i> Inbox <span class="fa fa-chevron-down"></span></a></li>
                  <li><a href="<?php echo e(url('/tournament')); ?>"><i class="fa fa-certificate"></i> Tournament <span class="fa fa-chevron-down"></span></a></li>
                  <li><a href="<?php echo e(url('/resources')); ?>"><i class="fa fa-archive"></i> Resources <span class="fa fa-chevron-down"></span></a></li>
                  <li><a href="<?php echo e(url('/livestream')); ?>"><i class="fa fa-youtube-play"></i> Livestream <span class="fa fa-chevron-down"></span></a></li>
                  <li><a href="<?php echo e(url('/achievement')); ?>"><i class="fa fa-star"></i> Achievement <span class="fa fa-chevron-down"></span></a></li>
                  <li><a href="<?php echo e(url('/achievement')); ?>"><i class="fa fa-line-chart"></i> Forcasting <span class="fa fa-chevron-down"></span><span class="label label-success pull-right">Coming Soon</span></a></li>
                  <li><a href="<?php echo e(url('/achievement')); ?>"><i class="fa fa-comment-o"></i> Forum <span class="fa fa-chevron-down"></span><span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="<?php echo e(url('/profile')); ?>" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Steven Yong
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo e(url('/profile')); ?>"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="<?php echo e(url('/login')); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li class="dropdown messages-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="label label-success">4</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="header">You have 4 messages</li>
                    <li>
                      <!-- inner menu: contains the actual data -->
                      <ul class="menu">
                        <li><!-- start message -->
                          <a href="#">
                            <div class="pull-left">
                              <img src="vendors/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                              Support Team
                              <small><i class="fa fa-clock-o"></i> 5 mins</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <!-- end message -->
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="vendors/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                              AdminLTE Design Team
                              <small><i class="fa fa-clock-o"></i> 2 hours</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="vendors/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                              Developers
                              <small><i class="fa fa-clock-o"></i> Today</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="vendors/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                              Sales Department
                              <small><i class="fa fa-clock-o"></i> Yesterday</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="vendors/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                              Reviewers
                              <small><i class="fa fa-clock-o"></i> 2 days</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="footer"><a href="#">See All Messages</a></li>
                  </ul>
                </li>
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning">10</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="header">You have 10 notifications</li>
                    <li>
                      <!-- inner menu: contains the actual data -->
                      <ul class="menu">
                        <li>
                          <a href="#">
                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                            page and may cause design problems
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-users text-red"></i> 5 new members joined
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-user text-red"></i> You changed your username
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="footer"><a href="#">View all</a></li>
                  </ul>
                </li>
                <!-- Tasks: style can be found in dropdown.less -->
                <li class="dropdown tasks-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-flag-o"></i>
                    <span class="label label-danger">9</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="header">You have 9 tasks</li>
                    <li>
                      <!-- inner menu: contains the actual data -->
                      <ul class="menu">
                        <li><!-- Task item -->
                          <a href="#">
                            <h3>
                              Design some buttons
                              <small class="pull-right">20%</small>
                            </h3>
                            <div class="progress xs">
                              <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                   aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">20% Complete</span>
                              </div>
                            </div>
                          </a>
                        </li>
                        <!-- end task item -->
                        <li><!-- Task item -->
                          <a href="#">
                            <h3>
                              Create a nice theme
                              <small class="pull-right">40%</small>
                            </h3>
                            <div class="progress xs">
                              <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                                   aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">40% Complete</span>
                              </div>
                            </div>
                          </a>
                        </li>
                        <!-- end task item -->
                        <li><!-- Task item -->
                          <a href="#">
                            <h3>
                              Some task I need to do
                              <small class="pull-right">60%</small>
                            </h3>
                            <div class="progress xs">
                              <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                                   aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">60% Complete</span>
                              </div>
                            </div>
                          </a>
                        </li>
                        <!-- end task item -->
                        <li><!-- Task item -->
                          <a href="#">
                            <h3>
                              Make beautiful transitions
                              <small class="pull-right">80%</small>
                            </h3>
                            <div class="progress xs">
                              <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                                   aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">80% Complete</span>
                              </div>
                            </div>
                          </a>
                        </li>
                        <!-- end task item -->
                      </ul>
                    </li>
                    <li class="footer">
                      <a href="#">View all tasks</a>
                    </li>
                  </ul>
                </li>


              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

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
                    <p class="text-muted font-13 m-b-30">

                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
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
                        <tr >
                          <td>Fenita</td>
                          <td>1472001</td>
                          <td>1</td>
                          <td>4</td>
                          <td>5</td>
                          <td>22</td>
                        </tr>
                        <tr>
                          <td>Lotanto Setiawan</td>
                          <td>1572029</td>
                          <td>0</td>
                          <td>2</td>
                          <td>10</td>
                          <td>16</td>
                        </tr>
                        <tr>
                          <td>James</td>
                          <td>1472011</td>
                          <td>3</td>
                          <td>1</td>
                          <td>1</td>
                          <td>19</td>
                        </tr>
                        <tr>
                          <td>Jason</td>
                          <td>1472013</td>
                          <td>5</td>
                          <td>0</td>
                          <td>0</td>
                          <td>25</td>
                        </tr>
                        <tr>
                          <td>Starry</td>
                          <td>1572008</td>
                          <td>0</td>
                          <td>4</td>
                          <td>1</td>
                          <td>13</td>
                        </tr>
                        <tr>
                          <td>Ricardo</td>
                          <td>1672024</td>
                          <td>0</td>
                          <td>1</td>
                          <td>1</td>
                          <td>4</td>
                        </tr>
                        <tr>
                          <td>Steven C</td>
                          <td>1672016</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>Steven Yong</td>
                          <td>1672088</td>
                          <td>10</td>
                          <td>6</td>
                          <td>1</td>
                          <td>69</td>
                        </tr>
                        <tr>
                          <td>Jevinna</td>
                          <td>1472004</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>14</td>
                        </tr>
                        <tr>
                          <td>Jeson</td>
                          <td>1472019</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>14</td>
                        </tr>
                        <tr>
                          <td>Andy</td>
                          <td>1472069</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>14</td>
                        </tr>
                        <tr>
                          <td>Madelene</td>
                          <td>1672004</td>
                          <td>2</td>
                          <td>1</td>
                          <td>2</td>
                          <td>15</td>
                        </tr>
                        <tr>
                          <td>Riki</td>
                          <td>1472003</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>14</td>
                        </tr>
                        <tr>
                          <td>Sehat</td>
                          <td>1472005</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>14</td>
                        </tr>
                        <tr>
                          <td>Bertha</td>
                          <td>1472086</td>
                          <td>2</td>
                          <td>1</td>
                          <td>3</td>
                          <td>16</td>
                        </tr>
                        <tr>
                          <td>Berthi</td>
                          <td>1472087</td>
                          <td>2</td>
                          <td>1</td>
                          <td>0</td>
                          <td>13</td>
                        </tr>
                        <tr>
                          <td>Yoseph</td>
                          <td>1472055</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>Gloria Little</td>
                          <td>1772022</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>Bradley Greer</td>
                          <td>1772001</td>
                          <td>0</td>
                          <td>1</td>
                          <td>1</td>
                          <td>4</td>
                        </tr>
                        <tr >
                          <td>Dai Rios</td>
                          <td>1772002</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>Jenette Caldwell</td>
                          <td>1772003</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>3</td>
                        </tr>
                        <tr >
                          <td>Yuri Berry</td>
                          <td>1772004</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>Caesar Vance</td>
                          <td>1772005</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>Doris Wilder</td>
                          <td>1772006</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>1772006</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>Gavin Joyce</td>
                          <td>1772006</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>Jennifer Chang</td>
                          <td>1772007</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>3</td>
                        </tr>
                        <tr >
                          <td>Brenden Wagner</td>
                          <td>1772008</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>Fiona Green</td>
                          <td>1772009</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>Shou Itou</td>
                          <td>1772010</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>Michelle House</td>
                          <td>1772011</td>
                          <td>0</td>
                          <td>3</td>
                          <td>0</td>
                          <td>12</td>
                        </tr>
                        <tr >
                          <td>Suki Burks</td>
                          <td>1772012</td>
                          <td>0</td>
                          <td>3</td>
                          <td>0</td>
                          <td>12</td>
                        </tr>
                        <tr>
                          <td>Prescott Bartlett</td>
                          <td>1772013</td>
                          <td>0</td>
                          <td>3</td>
                          <td>0</td>
                          <td>12</td>
                        </tr>
                        <tr >
                          <td>Gavin Cortez</td>
                          <td>1772014</td>
                          <td>0</td>
                          <td>3</td>
                          <td>0</td>
                          <td>12</td>
                        </tr>
                        <tr>
                          <td>Martena Mccray</td>
                          <td>1772015</td>
                          <td>0</td>
                          <td>3</td>
                          <td>0</td>
                          <td>12</td>
                        </tr>
                        <tr >
                          <td>Unity Butler</td>
                          <td>1772016</td>
                          <td>0</td>
                          <td>3</td>
                          <td>0</td>
                          <td>12</td>
                        </tr>
                        <tr>
                          <td>Howard Hatfield</td>
                          <td>1772017</td>
                          <td>0</td>
                          <td>3</td>
                          <td>0</td>
                          <td>12</td>
                        </tr>
                        <tr >
                          <td>Hope Fuentes</td>
                          <td>1772018</td>
                          <td>0</td>
                          <td>3</td>
                          <td>0</td>
                          <td>12</td>
                        </tr>
                        <tr>
                          <td>Vivian Harrell</td>
                          <td>1772019</td>
                          <td>0</td>
                          <td>3</td>
                          <td>0</td>
                          <td>12</td>
                        </tr>
                        <tr >
                          <td>Timothy Mooney</td>
                          <td>1772020</td>
                          <td>0</td>
                          <td>3</td>
                          <td>0</td>
                          <td>12</td>
                        </tr>
                        <tr>
                          <td>Jackson Bradshaw</td>
                          <td>1772021</td>
                          <td>0</td>
                          <td>3</td>
                          <td>0</td>
                          <td>12</td>
                        </tr>
                        <tr >
                          <td>Olivia Liang</td>
                          <td>1772021</td>
                          <td>0</td>
                          <td>3</td>
                          <td>5</td>
                          <td>17</td>
                        </tr>
                        <tr>
                          <td>Bruno Nash</td>
                          <td>1772022</td>
                          <td>0</td>
                          <td>3</td>
                          <td>5</td>
                          <td>17</td>
                        </tr>
                        <tr >
                          <td>Sakura Yamamoto</td>
                          <td>1772023</td>
                          <td>0</td>
                          <td>3</td>
                          <td>5</td>
                          <td>17</td>
                        </tr>
                        <tr>
                          <td>Thor Walton</td>
                          <td>1772024</td>
                          <td>0</td>
                          <td>3</td>
                          <td>5</td>
                          <td>17</td>
                        </tr>
                        <tr>
                          <td>Finn Camacho</td>
                          <td>1772025</td>
                          <td>0</td>
                          <td>3</td>
                          <td>5</td>
                          <td>17</td>
                        </tr>
                        <tr>
                          <td>Serge Baldwin</td>
                          <td>1772026</td>
                          <td>0</td>
                          <td>3</td>
                          <td>5</td>
                          <td>17</td>
                        </tr>
                        <tr >
                          <td>Zenaida Frank</td>
                          <td>1772027</td>
                          <td>0</td>
                          <td>3</td>
                          <td>5</td>
                          <td>17</td>
                        </tr>
                        <tr>
                          <td>Zorita Serrano</td>
                          <td>1772028</td>
                          <td>0</td>
                          <td>3</td>
                          <td>5</td>
                          <td>17</td>
                        </tr>
                        <tr >
                          <td>Jennifer Acosta</td>
                          <td>1772029</td>
                          <td>0</td>
                          <td>3</td>
                          <td>5</td>
                          <td>17</td>
                        </tr>
                        <tr>
                          <td>Cara Stevens</td>
                          <td>1772030</td>
                          <td>0</td>
                          <td>3</td>
                          <td>5</td>
                          <td>17</td>
                        </tr>
                        <tr >
                          <td>Hermione Butler</td>
                          <td>1772031</td>
                          <td>0</td>
                          <td>3</td>
                          <td>5</td>
                          <td>17</td>
                        </tr>
                        <tr>
                          <td>Lael Greer</td>
                          <td>1772032</td>
                          <td>1</td>
                          <td>3</td>
                          <td>5</td>
                          <td>22</td>
                        </tr>
                        <tr>
                          <td>Jonas Alexander</td>
                          <td>1772033</td>
                          <td>1</td>
                          <td>3</td>
                          <td>5</td>
                          <td>22</td>
                        </tr>
                        <tr>
                          <td>Shad Decker</td>
                          <td>1772032</td>
                          <td>1</td>
                          <td>3</td>
                          <td>5</td>
                          <td>22</td>
                        </tr>
                        <tr>
                          <td>Michael Bruce</td>
                          <td>1772034</td>
                          <td>1</td>
                          <td>3</td>
                          <td>5</td>
                          <td>22</td>
                        </tr>
                        <tr>
                          <td>Donna Snider</td>
                          <td>1772035</td>
                          <td>1</td>
                          <td>3</td>
                          <td>5</td>
                          <td>22</td>
                        </tr>
                      </tbody>
                    </table>
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

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            1472088 - Steven Yong
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

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
    <!-- Bootstrap WYSIHTML5 -->
    <script src="vendors/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  

    <!-- Custom Theme Scripts -->
    <script src="vendors/build/js/custom.min.js"></script>

  </body>
</html>
