@extends('layouts.master')

@section('css')
    <!-- Bootstrap -->
    <link href="{{URL::asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{URL::asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{URL::asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{URL::asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{URL::asset('vendors/animate.css/animate.min.css')}}" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="{{URL::asset('vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{URL::asset('vendors/build/css/custom.min.css')}}" rel="stylesheet">
    <!-- iCheck -->
   <link href="{{URL::asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
   <!-- Datatables -->
   <link href="{{URL::asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{URL::asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{URL::asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{URL::asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{URL::asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

@endsection

@section('content')
<!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Bank Soal</h3>
        </div>
      </div>
      <div class="clearfix"></div>

      <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Soal</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                <thead>
                  <tr>
                    <th>
                        <th><input type="checkbox" id="check-all" class="flat"></th>
                    </th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                  </tr>
                </thead>


                <tbody>
                  <tr>
                      <td>
                          <th><input type="checkbox" id="check-all" class="flat"></th>
                      </td>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                  </tr>

                </tbody>
              </table> -->


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
<script src="{{asset::('vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset::('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset::('vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset::('vendors/nprogress/nprogress.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset::('vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset::('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap-datetimepicker -->
<script src="{{asset::('vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
<!-- validator -->
<script src="{{asset::('vendors/validator/validator.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>
<!-- Datatables -->
<script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
<script src="{{asset('vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset::('vendors/build/js/custom.min.js')}}"></script>
<script>
    $('#myDatepicker').datetimepicker();

    $('#myDatepicker2').datetimepicker({
        format: 'DD/MM/YYYY'
    });

    $('#myDatepicker3').datetimepicker({
        format: 'HH:mm:ss A'
    });

    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });
    $('#myDatepicker9').datetimepicker({
        format: 'DD/MM/YYYY'
    });

    $('#datetimepicker6').datetimepicker();

    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });

    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });

    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>
@endsection
  </body>
</html>
