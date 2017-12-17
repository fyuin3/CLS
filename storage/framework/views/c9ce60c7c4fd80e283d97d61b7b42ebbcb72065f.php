<?php $__env->startSection('css'); ?>
    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="vendors/build/css/custom.min.css" rel="stylesheet">

    <style type="text/css">
      tr, td
      {
        padding:55px;
        margin:auto;
      }

    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Livestream <small></small> </h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Livestreaming <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      </li>

                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Livestreaming</a></li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Input</a></li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Tutorial</a></li>
                        <br/>
                      </ul>
                      <div id="myTabContent" class="tab-content">

                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                          <form>
                              <table border="1px solid black">
                              <?php foreach ($livestream as $live): ?>
                                <tr>
                                    <td><?php echo $live->link; ?></td>
                                    <td><a href="<?php echo $live->hlink; ?>" ><input type="button" value="join" name="btnJoin"></a></td>
                                </tr>
                              <?php endforeach; ?>
                            </table>
                          </form>
                          <div align="center">
                                <?php echo $livestream->links(); ?>

                          </div>

                        </div>


                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                         <h2>Input your Embeded link youtube</h2>
                         <form action="<?php echo e(url('/livestream')); ?>" method="POST">
                         <table>
                             <tr>
                                 <td>Input Your Hangout Link</td>
                                 <td>:</td>
                                 <td><input type="text" name="hlink" placeholder="Input your hangout link "></td>
                             </tr>
                             <tr>
                                 <td>Input Your Embeded Frame</td>
                                 <td>:</td>
                                 <td><input type="text" name="link" placeholder="Input your embeded frame "></td>
                             </tr>
                             <tr>
                                 <td>Input Your Description</td>
                                 <td>:</td>
                                 <td><textarea id="deskripsi" name="deskripsi" rows="4" cols="150"></textarea></td>
                             </tr>

                             <tr>
                                 <td colspan="4"><div align="right"><button id="send" type="submit" class="btn btn-success" name="btnLivestream" >Submit</button></div></td>
                             </tr>
                         </table>
                           <?php echo e(csrf_field()); ?>

                         </form>


                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab2">

                          <h1>Tutorial</h1>
                          <table>
                              <tr>
                                  <td>1</td>
                                  <td>Sign in ke akun <a href="https://www.youtube.com/">Youtube</a> anda</td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>Masuk ke bagian Creator </td>
                              </tr>
                              <tr>
                                <td colspan="2">
                                  <img src="Local/images/satu.jpg" >
                                </td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>Pilih tab pada bagian ( livestreaming -> event ) untuk membuat sebuah event yang ada </td>
                              </tr>
                              <tr>
                                <td colspan="2">
                                  <img src="images/dua.jpg" >
                                </td>
                                </tr>
                              <tr>
                                <td colspan="2"><img src="images/tiga.jpg" ></td>
                              </tr>
                              <tr>
                                  <td>4</td>
                                  <td>Klik tombol start broadcasting untuk memulai livestream</td>

                              </tr>
                              <tr>
                                <td colspan="2"><img src="images/empat.jpg" ></td>
                              </tr>
                              <tr>
                                  <td>5</td>
                                  <td>Masukkan link pada kolom youtube page pada hangout anda untuk masuk keruang chat anda , jangan lupa juga untuk memasukkan frame untuk embed video ke sistem</td>

                              </tr>
                              <tr>
                                <td colspan="2"><img src="images/lima.jpg" ></td>
                            </tr>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="vendors/build/js/custom.min.js"></script>

<?php $__env->stopSection(); ?>
  </body>
</html>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>