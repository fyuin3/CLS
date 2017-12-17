<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use URL;
use Carbon;
use Session;

use App\Http\Requests;
use App\Register;
use App\Mahasiswa;
use App\Dosen;
use App\Leaderboard;
use App\Tournament;
use App\Forecasting;

class forecastingController extends Controller
{
    public function index()
    {
      $user = Session::get('login');
      $forecasting = Forecasting::all();
      $user = Session::get('login');
      $idMhs = Mahasiswa::where('namaMhs',$user)->first();
      $mahasiswa = Forecasting::where('idMahasiswa',$idMhs->id)->first();
      // dd($mahasiswa);
      return view('/forecasting',['forecasting'=>$forecasting,'mahasiswa'=>$mahasiswa]);
    }

    public function createGayaBelajar(Request $request)
    {
      //Visual
      //2 3 6 7 12 17 19 23 25 30 31 33

      //auditori
      //1 4 8 11 14 15 16 20 22 27 32 34

      //kinestetik
      //5 9 10 13 18 21 24 26 28 29 35 36

      $gayaBelajar="";
      $auditori =0;
      $visual =0;
      $kinestetik =0;

      $answer1  = $request->satu;
      $answer2 = $request->dua;
      $answer3 = $request->tiga;
      $answer4 = $request->empat;
      $answer5 = $request->lima;
      $answer6 = $request->enam;
      $answer7 = $request->tujuh;
      $answer8 = $request->delapan;
      $answer9 = $request->sembilan;
      $answer10 = $request->sepuluh;
      $answer10 = $request->sepuluh;
      $answer11 = $request->sebelas;
      $answer12 = $request->duabelas;
      $answer13 = $request->tigabelas;
      $answer14 = $request->empatbelas;
      $answer15 = $request->limabelas;
      $answer16 = $request->enambelas;
      $answer17 = $request->tujuhbelas;
      $answer18 = $request->delapanbelas;
      $answer19 = $request->sembilanbelas;
      $answer20 = $request->duapuluh;
      $answer21 = $request->duasatu;
      $answer22 = $request->duadua;
      $answer23 = $request->duatiga;
      $answer24 = $request->duaempat;
      $answer25 = $request->dualima;
      $answer26 = $request->duaenam;
      $answer27 = $request->duatujuh;
      $answer28 = $request->duadelapan;
      $answer29 = $request->duasembilan;
      $answer30 = $request->tigapuluh;
      $answer31 = $request->tigasatu;
      $answer32 = $request->tigadua;
      $answer33 = $request->tigatiga;
      $answer34 = $request->tigaempat;
      $answer35 = $request->tigalima;
      $answer36 = $request->tigaenam;


      if($answer1 == "Ya")
      {
        $auditori+=1;
      }
      else if($answer2 == "Ya")
      {
        $visual+=1;
      }
      else if($answer3 == "Ya")
      {
        $visual+=1;
      }
      else if($answer4 == "Ya")
      {
        $auditori+=1;
      }
      else if($answer5 == "Ya")
      {
        $kinestetik+=1;
      }
      else if($answer6 == "Ya")
      {
        $visual+=1;
      }

      else if($answer7 == "Ya")
      {
        $visual+=1;
      }

      else if($answer8 == "Ya")
      {
        $auditori+=1;
      }

      else if($answer9 == "Ya")
      {
        $kinestetik+=1;
      }

      if($answer10 == "Ya")
      {
        $kinestetik+=1;
      }

      else if($answer11 == "Ya")
      {
        $auditori+=1;
      }

      else if($answer12 == "Ya")
      {
        $visual+=1;
      }

      else if($answer13 == "Ya")
      {
        $kinestetik+=1;
      }

      else if($answer14 == "Ya")
      {
        $auditori+=1;
      }

      else if($answer15 == "Ya")
      {
        $auditori+=1;
      }

      else if($answer16 == "Ya")
      {
        $auditori+=1;
      }

      else if($answer17 == "Ya")
      {
        $visual+=1;
      }

      else if($answer18 == "Ya")
      {
        $kinestetik+=1;
      }

      else if($answer19 == "Ya")
      {
        $visual+=1;
      }

      else if($answer20 == "Ya")
      {
        $auditori+=1;
      }

      else if($answer21 == "Ya")
      {
        $kinestetik+=1;
      }

      else if($answer22 == "Ya")
      {
        $auditori+=1;
      }

      else if($answer23 == "Ya")
      {
        $visual+=1;
      }

      else if($answer24 == "Ya")
      {
        $kinestetik+=1;
      }

      else if($answer25 == "Ya")
      {
        $visual+=1;
      }

      else if($answer26 == "Ya")
      {
        $kinestetik+=1;
      }

      else if($answer27 == "Ya")
      {
        $auditori+=1;
      }

      else if($answer28 == "Ya")
      {
        $kinestetik+=1;
      }

      else if($answer29 == "Ya")
      {
        $kinestetik+=1;
      }

      else if($answer30 == "Ya")
      {
        $visual+=1;
      }

      else if($answer31 == "Ya")
      {
        $visual+=1;
      }

      else if($answer32 == "Ya")
      {
        $auditori+=1;
      }

      else if($answer33 == "Ya")
      {
        $visual+=1;
      }

      else if($answer34 == "Ya")
      {
        $auditori+=1;
      }

      else if($answer35 == "Ya")
      {
        $kinestetik+=1;
      }

      else if($answer36 == "Ya")
      {
        $kinestetik+=1;
      }

      $maks = max($kinestetik,$auditori,$visual);
      if($auditori == $maks)
      {
        $gayaBelajar = "auditori";
      }
      else if($kinestetik == $maks)
      {
        $gayaBelajar = "kinestetik";
      }
      else if($visual == $maks)
      {
        $gayaBelajar = "visual";
      }

      $user = Session::get('login');
      $idMhs = Mahasiswa::where('namaMhs',$user)->first();
      $mahasiswa = Forecasting::where('idMahasiswa',$idMhs->id)->first();
      if($mahasiswa == null)
      {
        $forecasting = new Forecasting;
        $forecasting->gaya = $gayaBelajar;
        $forecasting->idMahasiswa = $idMhs->id;
        $forecasting->save();
        return redirect('forecasting');
      }


      return view('/forecasting',['forecasting'=>$forecasting,'mahasiswa'=>$mahasiswa]);

    }




}
