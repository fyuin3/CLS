@extends('layouts.exam')

@section('css')

<!-- Bootstrap -->
<link href="{{URL::asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- Font Awesome -->
<link href="{{URL::asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
<!-- NProgress -->
<link href="{{URL::asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
<!-- iCheck -->
<link href="{{URL::asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
<!-- bootstrap-progressbar -->
<link href="{{URL::asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
<!-- Datatables -->
<link href="{{URL::asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">


<!-- Custom styling plus plugins -->
<link href="{{URL::asset('vendors/build/css/custom.min.css')}}" rel="stylesheet">

<style type="text/css">
.judul
{
  font-size: 25px;
}
.bucket
{
   border-collapse: collapse;
   border-spacing: 0;
   width: 100%;
   overflow-x:auto;
   border: 1px solid ;
}
.flag
{
  background-color: black;
  color:white;
  border-color: white;
}
pre
{
    background-color: lavender;
    font-size: 15px;
    font-weight:bold;
}

th, td
{
   text-align: left;
   padding: 10px;
}
#myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 1%;
  height: 30px;
  background-color: #4CAF50;
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
         <h2>Tournament Exam</h2>
         <ul class="nav navbar-right panel_toolbox">
           <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
           </li>

           </ul>
             <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <div class="" role="tabpanel" data-example-id="togglable-tabs">
          <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Exam</a></li>
            <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Answer List</a></li>

            <br/>
          </ul>
          <div id="myTabContent" class="tab-content">

            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

              <div class="col-md-12 col-sm-12 col-xs-12">
           <div align="left"><b>Start :</b> {{ date('d-M-Y H:i:s', strtotime($tournament->start)) }}</div>
           <div align="left"><b>Finish :</b>{{ date('d-M-Y H:i:s', strtotime($tournament->finish)) }}</div>
           <div align="center" class="judul"><b>{{$tournament->namaTournament}}</b></div>
           <div id="myProgress">
            <div id="myBar"></div>
          </div>
           <!-- <div class="progress progress-striped active"> -->
                <!-- hijau -->

                <!-- <div class="progress-bar progress-bar-success" data-transitiongoal=""></div> -->

                <!-- kuning
                    <div class="progress-bar progress-bar-warning" data-transitiongoal="45"></div> -->


                <!-- biru

                        <div class="progress-bar progress-bar-info" data-transitiongoal="65"></div> -->

                <!-- merah -- >
                      <!-- <div class="progress-bar progress-bar-danger" data-transitiongoal="25"></div> -->

           <!-- </div> -->
           <div align="center" id="durasi"></div>
           <hr/>

         </div>
         <div class="col-md-12 col-sm-12 col-xs-12">
           <div align="Left" class="judul"><b>{{$banksoal->namaSoal}}</b></div>
           <hr/>
<div class="soal">



<?php foreach ($soalisian as $soals): ?>
<pre>
{{ $soals->soal}}
<br/>
</pre>
<?php endforeach; ?>

</div>
        <div align="center">
            {!! $soalisian->links() !!}
        </div>
        </div>

         <div class="col-md-12 col-sm-12 col-xs-12">

             {!! Form::open(['method' => 'POST' , 'action' => ['tournamentController@answer',$tournament->id]]  ) !!}
           <hr/>
           <!-- <div class="bucket">
             <h2>Jawab :</h2>

               <table border="1px solid white" cellpadding="20" >

               </table>

           </div> -->
           <br/>
           <div class="isi">
             <div class="col-md-12 col-sm-12 col-xs-12">
             <table>
                <tr>
                    <td>Isian</td>
                    <td>:</td>
                    <td>

                      <textarea id="jawabanisian" name="jawabanisian" class="form-control col-md-7 col-xs-12" rows="4" cols="150"></textarea>
                    </td>
                </tr>
             </table>
           </div>
           </div>

           <br/>
           <div align="right">

           <?php foreach ($soalisian as $soals): ?>
             <input type="hidden" id="idsoalisian" name="idsoalisian" value="{!! $soals->id !!}">
           <?php endforeach; ?>
           <input class="btn btn-primary" type="reset" value="Reset">
           <a href="{{Url('/tournament/exam/'.$tournament->id)}}"><button class="btn btn-primary" type="submit" >Answer</button></a>
           {!! Form::close()!!}
           </div>
           <br/>
           <hr/>

             <?php if ( $soalisian->currentPage() == $soalisian->lastPage() ): ?>
               {!! Form::open(['method'=>'POST', 'action'=>['tournamentController@score',$tournament->id]])!!}
               <div align="center">
                 <a href="{{Url('/tournament/score/'.$tournament->id)}}"><button type="submit" class="btn btn-success">Terminate</button></a>
               </div>
               {!! Form::close() !!}
             <?php endif; ?>

                <!-- <div class="radio">
                 <label>
                   <input type="radio" class="flat" name="iCheck"> 3
                 </label>
               </div>
               <div class="radio">
                 <label>
                   <input type="radio" class="flat" name="iCheck"> 5
                 </label>
               </div>
               <div class="radio">
                 <label>
                   <input type="radio" class="flat" name="iCheck"> 11
                 </label>
               </div>
               <div class="radio">
                 <label>
                   <input type="radio" class="flat" name="iCheck"> 9
                 </label>
               </div>
               <div class="radio">
                 <label>
                   <input type="radio" class="flat" name="iCheck"> 7
                 </label>
               </div>
                   -->




            </div>
          </div>

            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">


                        <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                              <table id="datatable-keytable" class="table table-striped table-bordered" style="color:black">
                                <thead>
                                  <tr>
                                    <th>Nomor Soal</th>
                                    <th>Jawaban Mahasiswa</th>
                                  </tr>
                                </thead>


                                <tbody>
                                  <?php $i=1 ?>
                                  <?php foreach ($jawabanDetail as $jd): ?>
                                    <tr>
                                      <td>{{$i++}}</td>
                                      <td>{{$jd->jawabanmhs}}</td>
                                    </tr>
                                  <?php endforeach; ?>


                                  <!-- {!! Form::open(['method'=>'POST', 'action'=>['tournamentController@score',$tournament->id]])!!}
                                  <div align="center">
                                    <a href="{{Url('/tournament/score/'.$tournament->id)}}"><button type="submit" class="btn btn-success">Terminate</button></a>
                                  </div>
                                  {!! Form::close() !!} -->

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
    </div>
  </div>
</div>
<!-- /page content -->

@endsection

@section('js')
      <!-- Timer Countdown -->
      <script type="text/javascript">
      // Set the date we're counting down to
      var countDownDate = new Date("{{$tournament->finish}}").getTime();

      // Update the count down every 1 second
      var x = setInterval(function() {

      // Get todays date and time
      var now = new Date().getTime();

      // Find the distance between now an the count down date
      var distance = countDownDate - now ;

      // Time calculations for days, hours, minutes and seconds

      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // var hours =Math.floor(distance/60);
      // var sisa = distance%60;
      // var minutes =Math.floor(sisa);
      // var seconds = Math.floor(sisa/3600);

      // Output the result in an element with id="durasi"
      document.getElementById("durasi").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s " ;


      // If the count down is over, write some text
      if (distance < 0) {
          clearInterval(x);
          document.getElementById("durasi").innerHTML = "EXPIRED";
      }
  }, 1000);


  </script>
  <!-- Progress bar -->
  <script>
      function move() {
        var elem = document.getElementById("myBar");
        var width = {{$totalDuration}};
        var id = setInterval(frame, 1000);
        function frame() {
          if (width <= 0) {
            clearInterval(id);
          } else {
            width=width-1;
            elem.style.width = width + '%';
          }
        }
      }
  </script>

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
  <!-- bootstrap-progressbar -->
  <script src="{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
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
