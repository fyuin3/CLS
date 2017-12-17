<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Register;
use App\Mahasiswa;

class RegisterController extends Controller
{
    public function index()
    {

      return view('/login');
    }

    public function create(Request $request)
    {
        $date = $request->tanggalLahir;
        $newDate = date("Y-m-d", strtotime($date));

        $register = new Register;
        $register->nrp = $request->nrp;
        $register->nama = $request->nama;
        $register->email = $request->email;
        $register->fakultas = $request->fakultas;
        $register->prodi = $request->prodi;
        $register->kota = $request->kota;
        $register->tanggalLahir = $newDate;
        $register->alamat = $request->alamat;
        $register->streamlink = $request->streamlink;
        $register->password = $request->password;
        $register->telephone = $request->telephone;
        $register->about = $request->about;
        $register->save();
        return redirect('login');
    }

    public function login(Request $request)
    {

      $name = DB::table('mahasiswa')->get();
      dd($name);
      // $register = new Register;
      // $user = $request->username;
      // $nrp = $mahasiswa->nrp;
      // $passInput = $request->pass;
      // $passMhs = $mahasiswa->password;
      //
      //   @if($user == $nrp && $passInput == $passMhs )
      //   {
      //     return view('/home');
      //   }
      //
      //   @elseif($user != $nrp && $passInput == $passMhs)
      //   {
      //     return redirect('login');
      //   }
      //
      //   @elseif($user == $nrp && $passInput != $passMhs)
      //   {
      //     return redirect('login');
      //   }
      //
      //   @elseif($user != $nrp && $passInput != $passMhs)
      //   {
      //     return redirect('login');
      //   }
      // }
      return view('/home');

    }

}
