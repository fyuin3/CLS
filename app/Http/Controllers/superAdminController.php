<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Register;
use App\Mahasiswa;
use App\Dosen;

class superAdminController extends Controller
{
    public function index(Request $request)
    {

      $register = Register::all();

      return view('/superadmin',['register'=>$register]);
    }



    public function update(Request $request, $id)
    {
      $date = $request->tanggalLahir;
      $newDate = date("Y-m-d", strtotime($date));

      $register = Register::find($id);
      $mahasiswa = Mahasiswa::where('nrp',$request->nrp)->first();
      $dosen = Dosen::where('nik',$request->nrp)->first();


      $register->nrp = $request->nrp;
      $register->nama = $request->nama;
      $register->email = $request->email;
      $register->fakultas = $request->fakultas;
      $register->prodi = $request->prodi;
      $register->kota = $request->kota;
      $register->tanggalLahir = $newDate;
      $register->alamat = $request->alamat;
      $register->role = $request->role;
      $register->streamlink = $request->streamlink;
      $register->password = md5($request->password);
      $register->telephone = $request->telephone;
      $register->about = $request->about;
      $register->save();

      if($request->role == "Mahasiswa" && $mahasiswa!=null )
      {
        $mahasiswa->nrp = $request->nrp;
        $mahasiswa->namaMhs = $request->nama;
        $mahasiswa->email = $request->email;
        $mahasiswa->fakultas = $request->fakultas;
        $mahasiswa->prodi = $request->prodi;
        $mahasiswa->kota = $request->kota;
        $mahasiswa->tanggalLahir = $newDate;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->role = $request->role;
        $mahasiswa->streamlink = $request->streamlink;
        $mahasiswa->password = md5($request->password);
        $mahasiswa->telephone = $request->telephone;
        $mahasiswa->about = $request->about;
        $mahasiswa->save();
      }
      else if($request->role == "Dosen" && $dosen!=null )
      {
        $dosen->nrp = $request->nrp;
        $dosen->namaDosen = $request->nama;
        $dosen->email = $request->email;
        $dosen->fakultas = $request->fakultas;
        $dosen->prodi = $request->prodi;
        $dosen->kota = $request->kota;
        $dosen->tanggalLahir = $newDate;
        $dosen->alamat = $request->alamat;
        $dosen->role = $request->role;
        $dosen->streamlink = $request->streamlink;
        $dosen->password = md5($request->password);
        $dosen->telephone = $request->telephone;
        $dosen->about = $request->about;
        $dosen->save();
      }

      return redirect('/superadmin');
    }

    public function edit($id)
    {
      $register = Register::find($id);

      return view('/update',['register'=>$register]);

    }

    public function delete($id)
    {
      $register = Register::find($id);
      $mahasiswa = Mahasiswa::where('nrp',$register->nrp)->first();
      $dosen = Dosen::where('nik',$register->nrp)->first();
      

      $register->delete();
      if($mahasiswa!=null)
      {
          $mahasiswa->delete();
      }
      if($dosen!=null)
      {
          $dosen->delete();
      }


      return redirect('/superadmin');

    }

}
