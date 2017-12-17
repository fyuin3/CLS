<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use URL;

use App\Http\Requests;
use App\Register;
use App\Mahasiswa;
use App\Dosen;
use App\Leaderboard;
use App\Tournament;
use App\Livestream;

class livestreamController extends Controller
{
    public function index(Request $request)
    {

      $livestream = Livestream::orderBy('created_at','desc')->paginate(2);


      return view('/livestream',['livestream'=>$livestream]);
    }

    public function create(Request $request)
    {

      $livestream = new Livestream;
      $livestream->nama = "Yong";
      $livestream->hlink = $request->hlink;
      $livestream->link = $request->link ;
      $livestream->save();

      return redirect("livestream");
    }















}
