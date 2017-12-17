<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use URL;
use DateTime;
use Carbon\Carbon;

use App\Http\Requests;
use App\Register;
use App\Mahasiswa;
use App\Dosen;
use App\Leaderboard;
use App\Tournament;
use App\TournamentTeam;
use App\SoalIsian;
use App\SoalPG;
use App\BankSoal;
class tournamentDosenController extends Controller
{
    public function index(Request $request)
    {
      $banksoal = BankSoal::all();
      $banksoalpg = BankSoal::all();
      $banksoalisian = BankSoal::all();

      $soalpg = SoalPG::all();
      $soalisian = SoalIsian::all();
      return view('dosen.tournamentDosen',['soalpg'=> $soalpg,'soalisian'=> $soalisian , 'banksoalpg'=> $banksoalpg ,'banksoalisian'=> $banksoalisian ,'banksoal'=>$banksoal ]);
    }

    public function create(Request $request)
    {
      $input = $request->all();
      $banksoalpg = BankSoal::all();
      $banksoal = BankSoal::all();
      $banksoalisian = BankSoal::all();
      $soalpg = SoalPG::all();
      $soalisian = SoalIsian::all();
      $tournament = new Tournament;
      $newTanggalTournament = date("Y-d-m", strtotime($request->tanggalTournament));
      $newFinish = date("Y-d-m H:i:s", strtotime($request->finish));
      $time = date("H:i:s", strtotime($request->start));
      $newStart = new DateTime($newTanggalTournament .' ' . $time);

      if($request->hasFile('gambar'))
      {
        $gambar = $request->file('gambar');
        $ext = $gambar->getClientOriginalExtension();

        if($request->file('gambar')->isValid())
        {
          $gambar_name = date('YmdHis'). ".$ext";
          $upload_path = 'images';
          $request->file('gambar')->move($upload_path,$gambar_name);
          $input['gambar'] = $gambar_name;

        }
      }
      else
      {
        $gambar_name ="";
      }


      // $hour =  date('h', strtotime($request->finish));
      // $minute = date('m', strtotime($request->finish));
      // $second = date('s', strtotime($request->finish));
      //
      // $start = $request->finish->subHours($hour)->toDateTimeString();  ;
      // $start = $request->finish->subMinutes($minute)->toDateTimeString();  ;
      // $start = $request->finish->subSeconds($second)->toDateTimeString();  ;
      // dd($start);

      $tournament->namaTournament = $request->namaTournament;
      $tournament->tanggalTournament = $newTanggalTournament;
      $tournament->creator = $request->creator;
      $tournament->status = $request->status;
      $tournament->point = $request->point;
      $tournament->gambar = $gambar_name;
      $tournament->tempat = $request->tempat;
      $tournament->start = $newStart;
      $tournament->finish =$newFinish;
      $tournament->idBankSoal = $request->banksoal;
      $tournament->tempat = $request->tempat;
      $tournament->about = $request->about;


      $tournament->save();
      session()->flash('createTournament','Tournament Berhasil dibuat');
      return view("dosen.tournamentDosen",['soalpg'=> $soalpg,'soalisian'=> $soalisian , 'banksoalpg'=> $banksoalpg ,'banksoalisian'=> $banksoalisian,'banksoal'=>$banksoal]);

    }






}
