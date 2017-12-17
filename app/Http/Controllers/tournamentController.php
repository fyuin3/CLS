<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use URL;
use Carbon\Carbon;
use Session;



use App\Http\Requests;
use App\Register;
use App\Mahasiswa;
use App\Dosen;
use App\Leaderboard;
use App\Tournament;
use App\TournamentTeam;
use App\SoalIsian;
use App\SoalPG;
use App\Banksoal;
use App\JawabanIsian;
use App\JawabanPG;
use App\Score;

class tournamentController extends Controller
{
    public function index(Request $request)
    {

      $tournament = Tournament::all();
      // $day = Carbon::now('Asia/Jakarta')->format('D');
      // $month = Carbon::now('Asia/Jakarta')->addMonth(1)->format('m');
      // $year = Carbon::now('Asia/Jakarta')->format('Y');
      $now = date("Y-m-d", strtotime(Carbon::now('Asia/Jakarta')));
      $time = Carbon::now('Asia/Jakarta')->toTimeString();




      $tournamentupcoming = DB::table('tournament')
                      ->whereDate('tanggalTournament','>=',$now)
                      //->whereTime('start',"<",$time)
                      ->get();

      $tournamentongoing = DB::table('tournament')
                      ->whereDate('tanggalTournament','>=',$now)
                      ->whereDate('tanggalTournament','<=',$now)
                      ->whereTime('start','<=',$time)
                      ->whereTime('finish','>=',$time)
                      ->get();

      $tournamentpast = DB::table('tournament')
                      ->whereDate('tanggalTournament','<=',$now)
                      //->whereTime('finish','>',$time)
                      ->get();

      return view('/tournament',['tournament'=>$tournament ,'tournamentongoing'=>$tournamentongoing ,'tournamentpast'=> $tournamentpast ,'tournamentupcoming'=>$tournamentupcoming ]);
    }

    public function form($id)
    {
      $tournament = Tournament::find($id);


      return view('/tournamentForm',['tournament'=>$tournament]);

    }
    public function create(Request $request)
    {
      $tournamentteam = new TournamentTeam;
      $tournamentteam->namaTeam = $request->namaTeam;
      $tournamentteam->anggota1 = $request->namaAnggota1;
      $tournamentteam->anggota2 = $request->namaAnggota2;
      $tournamentteam->anggota3 = $request->namaAnggota3;
      $tournamentteam->idTournament = $request->idTournament;
      $tournamentteam->save();
      session()->flash('teamCreated','Registrasi Team Berhasil');
      return redirect("tournament");

    }
    public function exam(Request $request,$id)
    {
      $mulai=null;
      if($mulai==null)
      {
        $mulai = Carbon::now('Asia/Jakarta');
      }
      // $user = session::get('login');
      // $idMahasiswa = Mahasiswa::where('namaMhs',$user)->first();
      // $tournament = Tournament::find($id);
      // $banksoal = BankSoal::find($tournament->idBankSoal);
      // $soalisian = SoalIsian::where('idBankSoal',$tournament->idBankSoal)->paginate(1);
      // $soalpg = SoalPG::where('idBankSoal',$tournament->idBankSoal)->paginate(1);
      // $startTime = Carbon::parse($tournament->start);
      // $finishTime = Carbon::parse($tournament->finish);
      //
      // $totalDuration = $finishTime->diffInSeconds($startTime);
      //
      // $jumlah_soal_isian = SoalIsian::where('idBankSoal',$tournament->idBankSoal)->count();
      //
      // $jawabanDetail = JawabanIsian::where('idMhs',$idMahasiswa->id)
      //                 ->where('idTournament',$tournament->id)
      //                 ->where('idBankSoal',$tournament->idBankSoal)
      //                 ->get();

      $user = session::get('login');
      $idMahasiswa = Mahasiswa::where('namaMhs',$user)->first();
      $mulai = Carbon::now('Asia/Jakarta');
      $tournament = Tournament::find($id);
      $banksoal = BankSoal::find($tournament->idBankSoal);
      $soalisian = SoalIsian::where('idBankSoal',$tournament->idBankSoal)->paginate(1);
      $soalpg = SoalPG::where('idBankSoal',$tournament->idBankSoal)->get();
      $startTime = Carbon::parse($tournament->start);
      $finishTime = Carbon::parse($tournament->finish);
      $totalDuration = $finishTime->diffInSeconds($startTime);
      $jumlah_soal_isian = SoalIsian::where('idBankSoal',$tournament->idBankSoal)->count();
      $index = SoalIsian::find($request->idsoalisian);
      $indexjawab = JawabanIsian::where('idsoalisian',$request->idsoalisian)->first();
      $idMhs = JawabanIsian::where('idMhs',$idMahasiswa->id)->first();
      $idJawabanIsian = JawabanIsian::where('idMhs',$idMahasiswa->id)
                      ->where('idsoalisian',$request->idsoalisian)
                      ->where('idTournament',$tournament->id)
                      ->where('idBankSoal',$tournament->idBankSoal)
                      ->first();
      $idJawabanIsian2 = JawabanIsian::where('idMhs',$idMahasiswa->id)
                      ->where('idTournament',$tournament->id)
                      ->where('idBankSoal',$tournament->idBankSoal)
                      ->get();

      $jawabanDetail = JawabanIsian::where('idMhs',$idMahasiswa->id)
                      ->where('idTournament',$tournament->id)
                      ->where('idBankSoal',$tournament->idBankSoal)
                      ->get();



      return view('/tournamentExam',['tournament'=> $tournament ,'soalisian'=>$soalisian , 'soalpg'=>$soalpg ,'banksoal'=>$banksoal,'jumlah_soal_isian'=>$jumlah_soal_isian,'totalDuration'=>$totalDuration,'mulai'=>$mulai,'jawabanDetail'=>$jawabanDetail,'']);
    }

    public function scoreboard(Request $request,$id)
    {
      $user = session::get('login');
      $idMahasiswa = Mahasiswa::where('namaMhs',$user)->first();
      if($idMahasiswa != null)
      {
      $mulai = Carbon::now('Asia/Jakarta');
      $tournament = Tournament::find($id);
      $banksoal = BankSoal::find($tournament->idBankSoal);
      $soalisian = SoalIsian::where('idBankSoal',$tournament->idBankSoal)->paginate(1);
      $soalpg = SoalPG::where('idBankSoal',$tournament->idBankSoal)->paginate(1);
      $startTime = Carbon::parse($tournament->start);
      $finishTime = Carbon::parse($tournament->finish);
      $totalDuration = $finishTime->diffInSeconds($startTime);
      $jumlah_soal_isian = SoalIsian::where('idBankSoal',$tournament->idBankSoal)->count();
      $index = SoalIsian::find($request->idsoalisian);
      $jawaban = JawabanIsian::where('idTournament',$tournament->id);
      $indexjawab = JawabanIsian::where('idsoalisian',$request->idsoalisian)->first();




      $idJawabanIsian = JawabanIsian::where('idMhs',$idMahasiswa->id)
                      ->where('idsoalisian',$request->idsoalisian)
                      ->where('idTournament',$tournament->id)
                      ->where('idBankSoal',$tournament->idBankSoal)
                      ->first();


    $jawabanDetail = JawabanIsian::where('idMhs',$idMahasiswa->id)
                    ->where('idTournament',$tournament->id)
                    ->where('idBankSoal',$tournament->idBankSoal)
                    ->get();

      $scoreboard = JawabanIsian::
                      where('idTournament',$tournament->id)
                      ->where('idBankSoal',$tournament->idBankSoal)
                      ->groupBy('idMhs')
                      ->get();
      $jawab = JawabanIsian::
                      where('idTournament',$tournament->id)
                      ->where('idBankSoal',$tournament->idBankSoal)
                      ->get();



      $idbanksoal= BankSoal::where('id',$tournament->idBankSoal)->first();
      $banyaksoal = $idbanksoal->jumlahSoal;



     $namaMahasiswa = Mahasiswa::where('id',$scoreboard->pluck('idMhs'))->get();

     $idMahasiswa = $scoreboard->pluck('idMhs');

     $totalSolve = $jawabanDetail->where('status','benar')->pluck('status')->count();

     $ss = Score::where('namaPeserta',$user)
                ->where('idTournament',$tournament->id)
                ->orderBy('totalSolve','desc')
                ->first();


     if($ss == null )
     {
       $score = new Score;
       $score->namaPeserta = $user;
       $score->totalSolve = $totalSolve;
       $score->idTournament = $tournament->id;
       $score->save();
     }
     else
     {
       $ss->namaPeserta = $user;
       $ss->totalSolve = $totalSolve;
       $ss->idTournament = $tournament->id;
       $ss->save();
     }

     $nilai = Score::where('idTournament',$tournament->id)
                     ->orderBy('totalSolve','desc')
                     ->get();

      }
      else
      {
        return redirect()->back();

      }

      return view('/tournamentScoreboard',['tournament'=> $tournament ,'soalisian'=>$soalisian , 'soalpg'=>$soalpg ,'banksoal'=>$banksoal,'jumlah_soal_isian'=>$jumlah_soal_isian,'totalDuration'=>$totalDuration ,'namaMahasiswa'=>$namaMahasiswa,'scoreboard'=>$scoreboard,'jawaban'=>$jawaban
      ,'banyaksoal'=>$banyaksoal,'jawabanDetail'=>$jawabanDetail,'idMahasiswa'=>$idMahasiswa,'nilai'=>$nilai]);

    }
    public function score(Request $request,$id)
    {
      $user = session::get('login');
      $idMahasiswa = Mahasiswa::where('namaMhs',$user)->first();
      $mulai = Carbon::now('Asia/Jakarta');
      $tournament = Tournament::find($id);
      $banksoal = BankSoal::find($tournament->idBankSoal);
      $soalisian = SoalIsian::where('idBankSoal',$tournament->idBankSoal)->paginate(1);
      $soalpg = SoalPG::where('idBankSoal',$tournament->idBankSoal)->paginate(1);
      $startTime = Carbon::parse($tournament->start);
      $finishTime = Carbon::parse($tournament->finish);
      $totalDuration = $finishTime->diffInSeconds($startTime);
      $jumlah_soal_isian = SoalIsian::where('idBankSoal',$tournament->idBankSoal)->count();
      $index = SoalIsian::find($request->idsoalisian);
      $jawaban = JawabanIsian::where('idTournament',$tournament->id);
      $indexjawab = JawabanIsian::where('idsoalisian',$request->idsoalisian)->first();




      $idJawabanIsian = JawabanIsian::where('idMhs',$idMahasiswa->id)
                      ->where('idsoalisian',$request->idsoalisian)
                      ->where('idTournament',$tournament->id)
                      ->where('idBankSoal',$tournament->idBankSoal)
                      ->first();


    $jawabanDetail = JawabanIsian::where('idMhs',$idMahasiswa->id)
                    ->where('idTournament',$tournament->id)
                    ->where('idBankSoal',$tournament->idBankSoal)
                    ->get();

      $scoreboard = JawabanIsian::
                      where('idTournament',$tournament->id)
                      ->where('idBankSoal',$tournament->idBankSoal)
                      ->groupBy('idMhs')
                      ->get();
      $jawab = JawabanIsian::
                      where('idTournament',$tournament->id)
                      ->where('idBankSoal',$tournament->idBankSoal)
                      ->get();



      $idbanksoal= BankSoal::where('id',$tournament->idBankSoal)->first();
      $banyaksoal = $idbanksoal->jumlahSoal;



     $namaMahasiswa = Mahasiswa::where('id',$scoreboard->pluck('idMhs'))->get();

     $idMahasiswa = $scoreboard->pluck('idMhs');

     $totalSolve = $jawabanDetail->where('status','benar')->pluck('status')->count();

     $ss = Score::where('namaPeserta',$user)
                ->where('idTournament',$tournament->id)
                ->orderBy('totalSolve','desc')
                ->first();


     if($ss == null )
     {
       $score = new Score;
       $score->namaPeserta = $user;
       $score->totalSolve = $totalSolve;
       $score->idTournament = $tournament->id;
       $score->save();
     }
     else
     {
       $ss->namaPeserta = $user;
       $ss->totalSolve = $totalSolve;
       $ss->idTournament = $tournament->id;
       $ss->save();
     }

     $nilai = Score::where('idTournament',$tournament->id)
                     ->orderBy('totalSolve','desc')
                     ->get();


      return view('/tournamentScoreboard',['tournament'=> $tournament ,'soalisian'=>$soalisian , 'soalpg'=>$soalpg ,'banksoal'=>$banksoal,'jumlah_soal_isian'=>$jumlah_soal_isian,'totalDuration'=>$totalDuration ,'namaMahasiswa'=>$namaMahasiswa,'scoreboard'=>$scoreboard,'jawaban'=>$jawaban
      ,'banyaksoal'=>$banyaksoal,'jawabanDetail'=>$jawabanDetail,'idMahasiswa'=>$idMahasiswa,'nilai'=>$nilai]);

    }


    public function answer(Request $request,$id)
    {
      $user = session::get('login');
      $idMahasiswa = Mahasiswa::where('namaMhs',$user)->first();
      $mulai = Carbon::now('Asia/Jakarta');
      $tournament = Tournament::find($id);
      $banksoal = BankSoal::find($tournament->idBankSoal);
      $soalisian = SoalIsian::where('idBankSoal',$tournament->idBankSoal)->paginate(1);
      $soalpg = SoalPG::where('idBankSoal',$tournament->idBankSoal)->get();
      $startTime = Carbon::parse($tournament->start);
      $finishTime = Carbon::parse($tournament->finish);
      $totalDuration = $finishTime->diffInSeconds($startTime);
      $jumlah_soal_isian = SoalIsian::where('idBankSoal',$tournament->idBankSoal)->count();
      $index = SoalIsian::find($request->idsoalisian);
      $indexjawab = JawabanIsian::where('idsoalisian',$request->idsoalisian)->first();
      $idMhs = JawabanIsian::where('idMhs',$idMahasiswa->id)->first();
      $idJawabanIsian = JawabanIsian::where('idMhs',$idMahasiswa->id)
                      ->where('idsoalisian',$request->idsoalisian)
                      ->where('idTournament',$tournament->id)
                      ->where('idBankSoal',$tournament->idBankSoal)
                      ->first();
      $idJawabanIsian2 = JawabanIsian::where('idMhs',$idMahasiswa->id)
                      ->where('idTournament',$tournament->id)
                      ->where('idBankSoal',$tournament->idBankSoal)
                      ->get();

      $jawabanDetail = JawabanIsian::where('idMhs',$idMahasiswa->id)
                      ->where('idTournament',$tournament->id)
                      ->where('idBankSoal',$tournament->idBankSoal)
                      ->get();

      $jumlah_soal_pg = SoalPG::where('idBankSoal',$tournament->idBankSoal)->count();
      $indexpg = SoalPG::find($request->idsoalisian);
      $indexjawabpg = JawabanPG::where('idsoalisian',$request->idsoalisian)->first();
      $idMhspg = JawabanPG::where('idMhs',$idMahasiswa->id)->first();
      $idJawabanPG = JawabanPG::where('idMhs',$idMahasiswa->id)
                      ->where('idsoalisian',$request->idsoalisian)
                      ->where('idTournament',$tournament->id)
                      ->where('idBankSoal',$tournament->idBankSoal)
                      ->first();
      $idJawabanPG2 = JawabanPG::where('idMhs',$idMahasiswa->id)
                      ->where('idTournament',$tournament->id)
                      ->where('idBankSoal',$tournament->idBankSoal)
                      ->get();

      $jawabanPGDetail = JawabanPG::where('idMhs',$idMahasiswa->id)
                      ->where('idTournament',$tournament->id)
                      ->where('idBankSoal',$tournament->idBankSoal)
                      ->get();


      if($request->jawabanpg != null )
      {

        if( $idJawabanPG == null)
        {
          $jawabanpg = new JawabanPG;
          $jawabanpg->jawabanmhs = $request->jawabanpg;
          $jawabanpg->start = $mulai;
          $jawabanpg->finish = $mulai;
          $jawabanpg->duration = $mulai;
          $statpg="";
          if($jawabanpg->jawabanmhs == $indexpg->kunciJawaban)
          {
            $statpg = "benar";
          }
          else
          {
            $statpg = "salah";
          }
          $jawabanpg->status = $stat;
          $jawabanpg->idMhs = $idMahasiswa->id;
          $jawabanpg->idTournament = $tournament->id;
          $jawabanpg->idBanksoal = $banksoal->id;
          $jawabanpg->idsoalpg = $request->idsoalpg;
          $jawabanpg->save();

        }
        else
        {

            $idJawabanPG->jawabanmhs = $request->jawabanisian;
            $idJawabanPG->start = $mulai;
            $idJawabanPG->finish = $mulai;
            $idJawabanPG->duration = $mulai;
            $statpg="";
            if($idJawabanPG->jawabanmhs == $indexpg->kunciJawaban)
            {
              $statpg = "benar";
            }
            else
            {
              $statpg = "salah";
            }
            $idJawabanPG->status = $stat;
            $idJawabanPG->idMhs = $idMahasiswa->id;
            $idJawabanPG->idTournament = $tournament->id;
            $idJawabanPG->idBanksoal = $banksoal->id;
            $idJawabanPG->idsoalpg = $request->idsoalpg;
            $idJawabanPG->save();
        }

      }

      if($request->jawabanisian != null )
      {

        if( $idJawabanIsian == null)
        {
          $jawabanisian = new JawabanIsian;
          $jawabanisian->jawabanmhs = $request->jawabanisian;
          $jawabanisian->start = $mulai;
          $jawabanisian->finish = $mulai;
          $jawabanisian->duration = $mulai;
          $stat="";
          if($jawabanisian->jawabanmhs == $index->kunciJawaban)
          {
            $stat = "benar";
          }
          else
          {
            $stat = "salah";
          }
          $jawabanisian->status = $stat;
          $jawabanisian->idMhs = $idMahasiswa->id;
          $jawabanisian->idTournament = $tournament->id;
          $jawabanisian->idBanksoal = $banksoal->id;
          $jawabanisian->idsoalisian = $request->idsoalisian;
          $jawabanisian->save();

        }
        else
        {

            $idJawabanIsian->jawabanmhs = $request->jawabanisian;
            $idJawabanIsian->start = $mulai;
            $idJawabanIsian->finish = $mulai;
            $idJawabanIsian->duration = $mulai;
            $stat="";
            if($idJawabanIsian->jawabanmhs == $index->kunciJawaban)
            {
              $stat = "benar";
            }
            else
            {
              $stat = "salah";
            }
            $idJawabanIsian->status = $stat;
            $idJawabanIsian->idMhs = $idMahasiswa->id;
            $idJawabanIsian->idTournament = $tournament->id;
            $idJawabanIsian->idBanksoal = $banksoal->id;
            $idJawabanIsian->idsoalisian = $request->idsoalisian;
            $idJawabanIsian->save();
        }
        return redirect()->back();
      }

      return view('/tournamentExam',['tournament'=> $tournament ,'soalisian'=>$soalisian , 'soalpg'=>$soalpg ,'banksoal'=>$banksoal,'jumlah_soal_isian'=>$jumlah_soal_isian,'jumlah_soal_pg'=>$jumlah_soal_pg,'totalDuration'=>$totalDuration,'mulai'=>$mulai,'jawabanDetail'=>$jawabanDetail]);



    }





}
