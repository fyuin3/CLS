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
    <link href="{{URL::asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{URL::asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{URL::asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{URL::asset('vendors/animate.css/animate.min.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{URL::asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="{{URL::asset('vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css')}}" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="{{URL::asset('vendors/build/css/custom.min.css')}}" rel="stylesheet">

  </head>



  <body class="login">
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            {!! Form::open(['method' => 'PUT' , 'action' => ['superAdminController@update',$register->id],'class' =>"form-horizontal form-label-left" ,"novalidate" ]  ) !!}
          <!-- <form action="{{Url('/superadmin/'.$register->id)}}" method="POST" class="form-horizontal form-label-left" novalidate> -->
              <h1>Update Account</h1>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nrp">NRP
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nrp" name="nrp" class="form-control col-md-7 col-xs-12"  name="nrp" value="{{$register->nrp}}" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Name
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nama" class="form-control col-md-7 col-xs-12"  name="nama" value="{{$register->nama}}"  type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email"  value="{{$register->email}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fakultas">Fakultas
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="fakultas" name="fakultas" >
                            <option>Pilih Fakultas</option>
                            <option value="Fakultas Kedokteran">Fakultas Kedokteran</option>
                            <option value="Fakultas Teknik">Fakultas Teknik</option>
                            <option value="Fakultas Psikologi">Fakultas Psikologi</option>
                            <option value="Fakultas Sastra">Fakultas Sastra</option>
                            <option value="Fakultas Ekonomi">Fakultas Ekonomi</option>
                            <option value="Fakultas Seni Rupa dan Desain">Fakultas Seni Rupa dan Desain</option>
                            <option value="Fakultas Teknologi Informasi">Fakultas Teknologi Informasi</option>
                            <option value="Fakultas Hukum">Fakultas Hukum</option>
                            <option value="Fakultas Kedokteran Gigi">Fakultas Kedokteran Gigi</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="prodi">Prodi
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control"  id="prodi" name="prodi" >
                            <option>Pilih Prodi</option>
                            <optgroup label="Fakultas Kedokteran">
                              <option value="Pendidikan Dokter">Pendidikan Dokter</option>
                              <option value="Profesi Dokter">Profesi Dokter</option>
                            </optgroup>

                            <optgroup label="Fakultas Teknik">
                              <option value="S-1 Teknik Sipil">S-1 Teknik Sipil</option>
                              <option value="S-1 Teknik Elektro">S-1 Teknik Elektro</option>
                              <option value="S-1 Teknik Industri">S-1 Teknik Industri</option>
                              <option value="S-1 Sistem Komputer">S-1 Sistem Komputer</option>
                            </optgroup>

                            <optgroup label="Fakultas Psikologi">
                              <option value="S-1 Psikologi">S-1 Psikologi</option>
                              <option value="S-2 Psikologi Sains">S-2 Psikologi Sains</option>
                              <option value="S-2 Psikologi Profesi">S-2 Psikologi Profesi</option>
                            </optgroup>

                            <optgroup label="Fakultas Sastra">
                              <option value="D-III Bahasa Mandarin">D-III Bahasa Mandarin</option>
                              <option value="S-1 Sastra Inggris">S-1 Sastra Inggris</option>
                              <option value="S-1 Sastra Jepang">S-1 Sastra Jepang</option>
                              <option value="S-1 Sastra Cina">S-1 Sastra Cina</option>
                            </optgroup>

                            <optgroup label="Fakultas Ekonomi">
                              <option value="S-1 Akuntansi">S-1 Akuntansi</option>
                              <option value="S-1 Manajemen">S-1 Manajemen</option>
                              <option value="S-2 Manajemen">S-2 Manajemen</option>
                            </optgroup>

                            <optgroup label="Fakultas Seni Rupa dan Desain">
                              <option value="D-III Seni Rupa dan Desain">D-III Seni Rupa dan Desain</option>
                              <option value="S-1 Seni Murni">S-1 Seni Murni</option>
                              <option value="S-1 Desain Interior">S-1 Desain Interior</option>
                              <option value="S-1 Desain Komunikasi Visual">S-1 Desain Komunikasi Visual</option>
                            </optgroup>

                            <optgroup label="Fakultas Teknologi Informasi">
                              <option value="S-1 Teknik Informatika">S-1 Teknik Informatika</option>
                              <option value="S-1 Sistem Informasi Bisnis">S-1 Sistem Informasi Bisnis</option>
                            </optgroup>

                            <optgroup label="Fakultas Hukum">
                              <option value="S-1 Ilmu Hukum">S-1 Ilmu Hukum</option>
                            </optgroup>

                            <optgroup label="Fakultas Kedokteran Gigi">
                              <option value="Pendidikan Dokter Gigi">Pendidikan Dokter Gigi</option>
                              <option value="Profesi Dokter Gigi">Profesi Dokter Gigi</option>
                            </optgroup>

                          </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kota">Kota Kelahiran<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="kota" class="form-control col-md-7 col-xs-12"  name="kota" value="{{$register->kota}}" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggalLahir">Tanggal Lahir
                        </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class='input-group date' id='myDatepicker2'>
                                <input type='text' id="tanggalLahir" name="tanggalLahir" placeholder="Day-Month-Year" class="form-control" required="required" value="{{$register->tanggalLahir}}" />
                                <span class="input-group-addon">
                                   <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                              </div>
                          </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="alamat" class="form-control col-md-7 col-xs-12"  name="alamat" value="{{$register->alamat}}" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="role">Role <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" required="required" id="role" name="role">
                            <option>Choose Role</option>
                            <option value="Mahasiswa" selected="true">Mahasiswa</option>
                            <option value="Dosen">Dosen</option>
                          </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="streamlink">Stream Link
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="url" id="streamlink" name="streamlink"  value="{{$register->streamlink}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3" for="password">New Password<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" type="password" name="password" data-validate-length="6,20" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12" for="password2">Repeat Password <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" placeholder=""="••••••" >
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel" id="telephone" name="telephone" data-validate-length-range="8,20" value="{{$register->telephone}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="about">About
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="about" name="about" class="form-control col-md-7 col-xs-12">{{$register->about}}</textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" class="btn btn-success" name="btnUpdate">Update</button>
                          <input type="hidden" name="_method" value="PUT">
                      </div>

                      <div class="clearfix"></div>

                <div class="separator">
                  <p class="change_link">Already a member ?
                    <a href="{{Url('/login')}}" class="to_register"> Log in </a>
                  </p>

                  <div class="clearfix"></div>
                  <br />

                  <div>
                    <h1><i class="fa fa-code"></i>Course Learning System</h1>
                    <p>©Steven Yong 1472088</p>
                  </div>
                </div>

                {{csrf_field()}}
                    {!! Form::close() !!}
            </section>
        </div>
      </div>

	<!-- Script -->
  <script src="{{ asset('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js')}}"></script>
    <!-- jQuery -->
   <script src="{{ asset('vendors/jquery/dist/jquery.min.js')}}"></script>
   <!-- Bootstrap -->
   <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
   <!-- FastClick -->
   <script src="{{ asset('vendors/fastclick/lib/fastclick.js')}}"></script>
   <!-- NProgress -->
   <script src="{{ asset('vendors/nprogress/nprogress.js')}}"></script>
  <!-- validator -->
  <script src="{{ asset('vendors/validator/validator.js')}}"></script>
  <!-- bootstrap-daterangepicker -->
   <script src="{{ asset('vendors/moment/min/moment.min.js')}}"></script>
   <script src="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
   <!-- bootstrap-datetimepicker -->
   <script src="{{ asset('vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
   <!-- jquery.inputmask -->
    <script src="{{ asset('vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
  <!-- Initialize datetimepicker -->
 <script>
     $('#myDatepicker').datetimepicker();

     $('#myDatepicker2').datetimepicker({
         format: 'DD.MM.YYYY'
     });

     $('#myDatepicker3').datetimepicker({
         format: 'hh:mm A'
     });

     $('#myDatepicker4').datetimepicker({
         ignoreReadonly: true,
         allowInputToggle: true
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

  <!-- Custom Theme Scripts -->
  <script src="{{ asset('vendors/build/js/custom.min.js')}}"></script>


  </body>
</html>
