<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Session;
use URL;

use App\Http\Requests;
use App\Register;
use App\Mahasiswa;
use App\Dosen;
use App\Leaderboard;
use App\SoalPG;
use App\SoalIsian;
use App\BankSoal;

class bankSoalController extends Controller
{
    public function index(Request $request)
    {

      $bank = DB::table('banksoal')
              ->orderBy('created_at','desc')
              ->orderBy('tahunTerbit','desc')
              ->get();

      $soalpg = SoalPG::all();
      $soalisian = SoalIsian::all();

      return view('dosen.bankSoalDosen',['soalpg'=>$soalpg , 'soalisian'=>$soalisian,'bank'=>$bank]);
    }
    public function createSoal(Request $request)
    {
      $now = date("Y-m-d", strtotime(Carbon::now('Asia/Jakarta')));
      $user = session::get('login');
      $cari = BankSoal::where('namaSoal',$request->namaSoal)->first();
      // if($cari == null)
      // {
          $newBank = new BankSoal;
          $newBank->namaSoal = $request->namaSoal;
          $newBank->pembuat = $user;
          $newBank->tahunTerbit = $now;
          $newBank->tipeSoal = $request->tipeSoal;
          $newBank->jumlahSoal = $request->jumlahSoal;
          $newBank->save();
      // }
      // else
      // {
      //   session()->flash('gagal','Proses Gagal');
      // }


      return redirect()->back();
    }


}
