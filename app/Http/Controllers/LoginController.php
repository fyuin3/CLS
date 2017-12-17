<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

use App\Http\Requests;
use App\Register;
use App\Mahasiswa;
use App\Dosen;

class LoginController extends Controller
{


    public function index()
    {
      return view('/login');
    }

    public function verify(Request $request)
    {

      $user = $request->username;
      $password = md5($request->pass);

      $register = Register::where('nrp',$user)->first();

      $mhsUsername = Mahasiswa::where('nrp',$user)->first();
      $mhsPassword = Mahasiswa::where('password',$password)->first();

      $dosenUsername = Dosen::where('nik',$user)->first();
      $dosenPassword = Dosen::where('password',$password)->first();




      if($mhsUsername != null && $mhsPassword != null || $dosenUsername != null && $dosenPassword != null)
      {
          session(['login' => $register->nama]);
          if($register->role == "Mahasiswa")
          {
            session(['roles' => $register->role]);
            return view('/home');
          }
          else
          {
            session(['roles' => $register->role]);
            return view('dosen.homeDosen');
          }

      }
      else if($mhsUsername == null && $mhsPassword != null ||  $dosenUsername == null && $dosenPassword != null)
      {
          session()->flash('lupaUser','Username yang anda masukkan salah');
          return redirect('/login');
      }
      else if($mhsUsername != null && $mhsPassword == null || $dosenUsername != null && $dosenPassword == null)
      {
          session()->flash('lupaPass','Password yang anda masukkan salah');
          return redirect('/login');
      }
      else if($mhsUsername == null && $mhsPassword == null || $dosenUsername == null && $dosenPassword == null )
      {
          session()->flash('lupa','Username & Password yang anda masukkan salah');
          return redirect('/login');
      }


    }

    public function logout(Request $request)
    {
        session()->flush();
        return redirect('/login');
    }
}
