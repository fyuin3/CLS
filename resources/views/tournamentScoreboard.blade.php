@extends('layouts.master')

@section('css')

<!-- Bootstrap -->
<link href="{{URL::asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- Font Awesome -->
<link href="{{URL::asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
<!-- NProgress -->
<link href="{{URL::asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
<!-- iCheck -->
<link href="{{URL::asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
<!-- Datatables -->
<link href="{{URL::asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

<!-- Custom styling plus plugins -->
<link href="{{URL::asset('vendors/build/css/custom.min.css')}}" rel="stylesheet">

<style type="text/css">
.hijau
{
  background-color: #60e760;

}
.first
{
  background-color: #1daa1d;

}
.merah
{
  background-color: #e87272;

}
.untried
{

}
</style>
@endsection

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Tournament</h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
     <div class="col-md-12 col-sm-12 col-xs-12">
       <div class="x_panel">
         <div class="x_title">
           <h2>Tournament Scoreboard</h2>
           <ul class="nav navbar-right panel_toolbox">
             <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
             </li>
           </ul>
           <div class="clearfix"></div>
         </div>
         <div class="x_content">
           <div class="row">
             <table border="1px solid black" style="color:black">
                 <!-- <tr>
                    <td class="first"><b>First Solver</b></td>
                 </tr> -->
                 <tr>
                     <td class="hijau"><b>Accepted</b></td>
                 </tr>
                 <tr>
                     <td class="merah"><b>Wrong Answer</b></td>
                 </tr>
                 <tr>
                     <td class="untried">Untried</td>
                 </tr>
             </table>
             <br/>
           </div>
           <div class="row">
                       <div class="col-sm-12">
                         <div class="card-box table-responsive">
                           <table id="datatable-keytable" class="table table-striped table-bordered" style="color:black">
                             <thead>
                               <tr>
                                 <th>Rank</th>
                                 <th>Nama</th>
                                 <th>Solve</th>
                                 <th>Poin</th>

                               </tr>
                             </thead>


                             <tbody>
                                 <?php $i=1 ?>
                                 <?php foreach ($nilai as $nil): ?>
                                     <tr>
                                      <td>{{$i++}}</td>
                                      <td>{{$nil->namaPeserta}}</td>
                                      <td>{{$nil->totalSolve}}</td>
                                      <td>{{($nil->totalSolve / $banyaksoal)*100 }}</td>

                                     </tr>
                                 <?php endforeach; ?>




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
  <script src="{{ asset('vendors/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{ asset('vendors/fastclick/lib/fastclick.js')}}"></script>
  <!-- NProgress -->
  <script src="{{ asset('vendors/nprogress/nprogress.js')}}"></script>
  <!-- iCheck -->
  <script src="{{ asset('vendors/iCheck/icheck.min.js')}}"></script>
  <!-- Datatables -->
   <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
   <script src="{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
   <script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
   <script src="{{ asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
   <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
   <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
   <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
   <script src="{{ asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
   <script src="{{ asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
   <script src="{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
   <script src="{{ asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
   <script src="{{ asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
   <script src="{{ asset('vendors/jszip/dist/jszip.min.js')}}"></script>
   <script src="{{ asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
   <script src="{{ asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>
  <!-- Custom Theme Scripts -->
  <script src="{{ asset('vendors/build/js/custom.min.js')}}"></script>

@endsection
  </body>
</html>
