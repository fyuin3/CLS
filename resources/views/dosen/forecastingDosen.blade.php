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
    <!-- Switchery -->
    <link href="{{URL::asset('vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{URL::asset('vendors/build/css/custom.min.css')}}" rel="stylesheet">
@endsection

@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Forcasting <small></small></h3>
              </div>
            </div>

            <div class="clearfix"></div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Gaya Belajar</a></li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">IPK Calc</a></li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Forecasting</a></li>
                        <br/>
                      </ul>
                      <div id="myTabContent" class="tab-content">

                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                             <?php if ($mahasiswa == null ): ?>
                               <h1>Menebak Gaya Belajar</h1>
                               <h3>Berikut adalah fitur forecasting gaya belajar yang diharapkan sesuai dengan gaya belajar anda,bisa saja seseorang mempunyai lebih dari satu gaya belajar, tetapi pasti ada yang lebih dominan dibandingkan dengan gaya belajar yang lain. Dengan memaksimalkan gaya belajar tersebut diharapkan dapat meningkatkan penguasaan materi dalam proses pembelajaran.</h3>
                               {!! Form::open(['method' => 'POST' , 'action' => 'forecastingController@createGayaBelajar']  ) !!}
                               <table>
                                   <tr>
                                       <td>1.</td>
                                       <td>Saya lebih suka mendengarkan informasi yang ada di kaset daripada membaca buku.</td>
                                       <td>
                                         {{ Form::radio("satu","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("satu", 'Ya') }}
                                         {{ Form::radio("satu","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("satu", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>2.</td>
                                       <td>Jika mengerjakan sesuatu, saya selalu membaca instruksinya terlebih dahulu.</td>
                                       <td>
                                         {{ Form::radio("dua","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("dua", 'Ya') }}
                                         {{ Form::radio("dua","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("dua", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>3.</td>
                                       <td>Saya lebih suka membaca daripada mendengarkan kuliah/penjelasan.</td>
                                       <td>
                                         {{ Form::radio("tiga","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("tiga", 'Ya') }}
                                         {{ Form::radio("tiga","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("tiga", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>4.</td>
                                       <td>Saat seorang diri, saya biasanya memainkan musik/lagu atau bernyanyi.</td>
                                       <td>
                                         {{ Form::radio("empat","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("empat", 'Ya') }}
                                         {{ Form::radio("empat","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("empat", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>5.</td>
                                       <td>Saya lebih suka berolahraga daripada membaca buku.</td>
                                       <td>
                                         {{ Form::radio("lima","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("lima", 'Ya') }}
                                         {{ Form::radio("lima","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("lima", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>6.</td>
                                       <td>Saya selalu dapat menunjukkan arah Utara atau Selatan di mana pun saya berada.</td>
                                       <td>
                                         {{ Form::radio("enam","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("enam", 'Ya') }}
                                         {{ Form::radio("enam","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("enam", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>7.</td>
                                       <td>Saya suka menulis surat, jurnal atau buku harian.</td>
                                       <td>
                                         {{ Form::radio("tujuh","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("tujuh", 'Ya') }}
                                         {{ Form::radio("tujuh","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("tujuh", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>8.</td>
                                       <td>Saat berbicara, saya suka mengatakan, “Saya mendengar Anda, itu terdengar bagus, itu bunyinya bagus.</td>
                                       <td>
                                         {{ Form::radio("delapan","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("delapan", 'Ya') }}
                                         {{ Form::radio("delapan","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("delapan", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>9.</td>
                                       <td>Ruangan, meja, mobil atau rumah saya biasanya berantakan/tidak teratur.</td>
                                       <td>
                                         {{ Form::radio("sembilan","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("sembilan", 'Ya') }}
                                         {{ Form::radio("sembilan","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("sembilan", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>10.</td>
                                       <td>Saya suka merancang, mengerjakan dan membuat sesuatu dengan kedua tangan saya.</td>
                                       <td>
                                         {{ Form::radio("sepuluh","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("sepuluh", 'Ya') }}
                                         {{ Form::radio("sepuluh","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("sepuluh", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>11.</td>
                                       <td>Saya tahu hampir semua kata dari lagu yang saya dengar.</td>
                                       <td>
                                         {{ Form::radio("sebelas","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("sebelas", 'Ya') }}
                                         {{ Form::radio("sebelas","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("sebelas", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>12.</td>
                                       <td>Ketika mendengar orang lain berbicara, saya biasanya membuat gambar dari apa yang mereka katakan dalam pikiran saya.</td>
                                       <td>
                                         {{ Form::radio("duabelas","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("duabelas", 'Ya') }}
                                         {{ Form::radio("duabelas","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("duabelas", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>13.</td>
                                       <td>Saya suka olahraga dan rasanya saya adalah olahragawan yang baik.</td>
                                       <td>
                                         {{ Form::radio("tigabelas","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("tigabelas", 'Ya') }}
                                         {{ Form::radio("tigabelas","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("tigabelas", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>14.</td>
                                       <td>Mudah sekali bagi saya untuk mengobrol dalam waktu yang lama dengan kawan saya saat berbicara di telepon.</td>
                                       <td>
                                         {{ Form::radio("empatbelas","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("empatbelas", 'Ya') }}
                                         {{ Form::radio("empatbelas","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("empatbelas", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>15.</td>
                                       <td>Tanpa musik, hidup amat membosankan.</td>
                                       <td>
                                         {{ Form::radio("limabelas","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("limabelas", 'Ya') }}
                                         {{ Form::radio("limabelas","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("limabelas", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>16.</td>
                                       <td>Saya sangat senang berkumpul dan biasanya dapat dengan mudah berbicara dengan siapa saja.</td>
                                       <td>
                                         {{ Form::radio("enambelas","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("enambelas", 'Ya') }}
                                         {{ Form::radio("enambelas","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("enambelas", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>17.</td>
                                       <td>Saat melihat obyek dalam bentuk gambar, saya dapat dengan mudah mengenali obyek yang sama walaupun posisi obyek itu diputar/diubah.</td>
                                       <td>
                                         {{ Form::radio("tujuhbelas","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("tujuhbelas", 'Ya') }}
                                         {{ Form::radio("tujuhbelas","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("tujuhbelas", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>18.</td>
                                       <td>Saya biasanya mengatakan, “Saya rasa, saya perlu menemukan pijakan atas hal ini, atau saya ingin bisa menangani hal ini.</td>
                                       <td>
                                         {{ Form::radio("delapanbelas","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("delapanbelas", 'Ya') }}
                                         {{ Form::radio("delapanbelas","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("delapanbelas", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>19.</td>
                                       <td>Saat mengingat suatu pengalaman, saya sering kali melihat pengalaman itu dalam bentuk gambar di dalam pikiran saya.</td>
                                       <td>
                                         {{ Form::radio("sembilanbelas","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("sembilanbelas", 'Ya') }}
                                         {{ Form::radio("sembilanbelas","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("sembilanbelas", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>20.</td>
                                       <td>Saat mengingat suatu pengalaman, saya seringkali mendengar suara dan berbicara pada diri saya mengenai pengalaman itu.</td>
                                       <td>
                                         {{ Form::radio("duapuluh","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("duapuluh", 'Ya') }}
                                         {{ Form::radio("duapuluh","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("duapuluh", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>21.</td>
                                       <td>Saat mengingat suatu pengalaman, saya seringkali ingat bagaimana perasaan saya terhadap pengalaman itu.</td>
                                       <td>
                                         {{ Form::radio("duasatu","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("duasatu", 'Ya') }}
                                         {{ Form::radio("duasatu","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("duasatu", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>22.</td>
                                       <td>Saya lebih suka musik daripada seni lukis.</td>
                                       <td>
                                         {{ Form::radio("duadua","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("duadua", 'Ya') }}
                                         {{ Form::radio("duadua","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("duadua", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>23.</td>
                                       <td>Saya sering mencoret-coret kertas saat berbicara di telepon atau dalam suatu pertemuan/rapat.</td>
                                       <td>
                                         {{ Form::radio("duatiga","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("duatiga", 'Ya') }}
                                         {{ Form::radio("duatiga","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("duatiga", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>24.</td>
                                       <td>Saya lebih suka melakukan contoh peragaan daripada membuat laporan tertulis atas suatu kejadian.</td>
                                       <td>
                                         {{ Form::radio("duaempat","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("duaempat", 'Ya') }}
                                         {{ Form::radio("duaempat","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("duaempat", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>25.</td>
                                       <td>Saya lebih suka membacakan cerita daripada mendengarkan.</td>
                                       <td>
                                         {{ Form::radio("dualima","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("dualima", 'Ya') }}
                                         {{ Form::radio("dualima","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("dualima", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>26.</td>
                                       <td>Saya biasanya berbicara dengan perlahan.</td>
                                       <td>
                                         {{ Form::radio("duaenam","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("duaenam", 'Ya') }}
                                         {{ Form::radio("duaenam","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("duaenam", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>27.</td>
                                       <td>Saya lebih suka berbicara daripada menulis.</td>
                                       <td>
                                         {{ Form::radio("duatujuh","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("duatujuh", 'Ya') }}
                                         {{ Form::radio("duatujuh","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("duatujuh", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>28.</td>
                                       <td>Tulisan tangan saya biasanya tidak rapi.</td>
                                       <td>
                                         {{ Form::radio("duadelapan","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("duadelapan", 'Ya') }}
                                         {{ Form::radio("duadelapan","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("duadelapan", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>29.</td>
                                       <td>Saya biasanya menggunakan jari saya untuk menunjuk kalimat yang saya baca.</td>
                                       <td>
                                         {{ Form::radio("duasembilan","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("duasembilan", 'Ya') }}
                                         {{ Form::radio("duasembilan","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("duasembilan", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>30.</td>
                                       <td>Saya dapat dengan cepat melakukan penjumlahan dan perkalian dalam pikiran saya.</td>
                                       <td>
                                         {{ Form::radio("tigapuluh","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("tigapuluh", 'Ya') }}
                                         {{ Form::radio("tigapuluh","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("tigapuluh", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>31.</td>
                                       <td>Saya suka mengeja dan saya pintar mengeja kata-kata.</td>
                                       <td>
                                         {{ Form::radio("tigasatu","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("tigasatu", 'Ya') }}
                                         {{ Form::radio("tigasatu","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("tigasatu", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>32.</td>
                                       <td>Saya akan sangat terganggu apabila ada orang yang berbicara pada saya saat sedang nonton TV.</td>
                                       <td>
                                         {{ Form::radio("tigadua","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("tigadua", 'Ya') }}
                                         {{ Form::radio("tigadua","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("tigadua", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>33.</td>
                                       <td>Saya suka mencatat perintah/instruksi yang disampaikan pada saya.</td>
                                       <td>
                                         {{ Form::radio("tigatiga","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("tigatiga", 'Ya') }}
                                         {{ Form::radio("tigatiga","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("tigatiga", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>34.</td>
                                       <td>Saya dapat mengingat dengan mudah apa yang orang katakan.</td>
                                       <td>
                                         {{ Form::radio("tigaempat","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("tigaempat", 'Ya') }}
                                         {{ Form::radio("tigaempat","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("tigaempat", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>35.</td>
                                       <td>Saya paling mudah belajar sambil mempraktekkan/melakukan.</td>
                                       <td>
                                         {{ Form::radio("tigalima","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("tigalima", 'Ya') }}
                                         {{ Form::radio("tigalima","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("tigalima", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>36.</td>
                                       <td>Sangat sulit bagi saya untuk duduk diam dalam waktu yang lama.</td>
                                       <td>
                                         {{ Form::radio("tigaenam","Ya", false, ['class' => 'flat']) }}
                                         {{ Form::label("tigaenam", 'Ya') }}
                                         {{ Form::radio("tigaenam","Tidak", false, ['class' => 'flat']) }}
                                         {{ Form::label("tigaenam", 'Tidak') }}
                                       </td>
                                   </tr>
                                   <tr>
                                       <td colspan="3" align="center"><button id="send" type="submit" class="btn btn-success" name="btnGayaBelajar">Submit</button></td>
                                   </tr>
                               </table>

                               {{csrf_field()}}
                           {!! Form::close() !!}




 <?php elseif ($mahasiswa->gaya == "kinestetik"): ?>

<pre>
Kinestetik

Model pembelajar kinestetik adalah pembelajar yang menyerap informasi melalui berbagai gerakan fisik.Ciri-ciri pembelajar kinestetik, di antaranya adalah:

Selalu berorientasi fisik dan banyak bergerak
Berbicara dengan perlahan
Menanggapi perhatian fisik
Suka menggunakan berbagai peralatan dan media
Menyentuh orang untuk mendapatkan perhatian mereka
Berdiri dekat ketika berbicara dengan orang
Mempunyai perkembangan awal otot-otot yang besar
Belajar melalui praktek
Menghafal dengan cara berjalan dan melihat
Menggunakan jari sebagai penunjuk ketika membaca
Banyak menggunakan isyarat tubuh
Tidak dapat duduk diam untuk waktu lama
Menggunakan kata-kata yang menandung akso
Menyukai buku-buku yang berorientasi pada cerita
Kemungkinan tulisannya jelek
Ingin melakukan segala sesuatu
Menyukai permainan dan olah raga
</pre>

                                    <?php elseif ($mahasiswa->gaya == "visual"): ?>

<pre>
Visual

Modalitas ini menyerap citra terkait dengan visual, warna, gambar, peta, diagram. Model pembelajar visual menyerap informasi dan belajar dari apa yang dilihat oleh mata. Beberapa ciri dari pembelajar visual di antaranya adalah:

Mengingat apa yang dilihat, daripada yang didengar.
Suka mencoret-coret sesuatu, yang terkadang tanpa ada artinya saat di dalam kelas
Pembaca cepat dan tekun
Lebih suka membaca daripada dibacakan
Rapi dan teratur
Mementingkan penampilan, dalam hal pakaian ataupun penampilan keseluruhan
Teliti terhadap detail
Pengeja yang baik
Lebih memahami gambar dan bagan daripada instruksi tertulis
</pre>


                              <?php elseif ($mahasiswa->gaya == "auditori"): ?>

<pre>
Auditori

Model pembelajar auditori adalah model di mana seseorang lebih cepat menyerap informasi melalui apa yang ia dengarkan. Penjelasan tertulis akan lebih mudah ditangkap oleh para pembelajar auditori ini. Ciri-ciri orang-orang auditorial, di antaranya adalah:

Lebih cepat menyerap dengan mendengarkan
Menggerakkan bibir mereka dan mengucapkan tulisan di buku ketika membaca
Senang membaca dengan keras dan mendengarkan
Dapat mengulangi kembali dan menirukan nada, birama, dan warna suara.
Bagus dalam berbicara dan bercerita
Berbicara dengan irama yang terpola
Belajar dengan mendengarkan dan mengingat apa yang didiskusikan daripada yang dilihat
Suka berbicara, suka berdiskusi, dan menjelaskan sesuatu panjang lebar
Lebih pandai mengeja dengan keras daripada menuliskannya
Suka musik dan bernyanyi
Tidak bisa diam dalam waktu lama
Suka mengerjakan tugas kelompok
</pre>

<?php endif; ?>



                        <!-- Adi W.Gunawan.2012.Genius Learning Strategy.Jakarta:PT.Gramedia Pustaka Utama -->


                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                          <form>
                        <table border="1px solid black">
                            <tr>
                                <td>Bobot UTS</td>
                                <td>:</td>
                                <td><input type="text" name="bUTS" id="bUTS"></td>
                            </tr>
                            <tr>
                                <td>Bobot UAS</td>
                                <td>:</td>
                                <td><input type="text" name="bUAS" id="bUAS"></td>
                            </tr>
                            <tr>
                                <td>Bobot KAT</td>
                                <td>:</td>
                                <td><input type="text" name="bKAT" id="bKAT"></td>
                            </tr>
                            <tr>
                                <td>UTS $nbsp; <input type="text" name="UTS" id="UTS"></td>
                                <td>UAS $nbsp; <input type="text" name="UAS" id="UAS"></td>
                                <td>KAT $nbsp; <input type="text" name="KAT" id="KAT"></td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                            </tr>
                        </table>
                        </form>


                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab2">



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

    <!-- Forecasting -->
    <script src="{{asset('vendors/forecasting/forecasting.js')}}"></script>
    <!-- jQuery -->
    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>




    <!-- Custom Theme Scripts -->
    <script src="{{asset('vendors/build/js/custom.min.js')}}"></script>
@endsection
  </body>
</html>
