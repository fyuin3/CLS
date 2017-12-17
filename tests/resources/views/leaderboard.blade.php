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
