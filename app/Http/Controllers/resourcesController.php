<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;
use App\Http\Requests;
use App\Register;
use App\Mahasiswa;
use App\Dosen;
use App\Leaderboard;
use App\Tournament;
use App\Resources;


class resourcesController extends Controller
{
    public function index(Request $request)
    {

      // $pathToFile = "C:\xampp\htdocs\CLSReborn\Local\download\Kuis01_Daspro_IF.pdf";
        $resources = Resources::all();
      //
      // return response()->download($pathToFile);


       return view('/resources',['resources'=>$resources]);
    }

  public function getDownload()
  {
      //PDF file is stored under project/public/download/info.pdf
      $file= public_path(). "../download/Kuis01_Daspro_IF.pdf";

      $headers = array(
                'Content-Type: application/pdf',
              );

      return Response::download($file, 'Kuis01_Daspro_IF.pdf', $headers);
  }

}
