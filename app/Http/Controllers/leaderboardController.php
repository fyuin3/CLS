<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Register;
use App\Mahasiswa;
use App\Dosen;
use App\Leaderboard;

class leaderboardController extends Controller
{
    public function index()
    {

      $leaderboard = DB::table('leaderboard')
                ->orderBy('total', 'desc')
                ->orderBy('emas', 'desc')
                ->orderBy('perak', 'desc')
                ->orderBy('perunggu', 'desc')
                ->paginate(10);

      $log = Leaderboard::where('updated_at','!=',null)->get();
      return view('/leaderboard',['leaderboard'=>$leaderboard,'log'=>$log]);
    }



}
