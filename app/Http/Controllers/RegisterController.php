<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Register;
use App\Mahasiswa;
use App\Dosen;
use App\Leaderboard;

class RegisterController extends Controller
{
    public function index()
    {
      return view('/register');
    }

    public function create(Request $request)
    {

        $date = $request->tanggalLahir;
        $newDate = date("Y-m-d", strtotime($date));
        $unik1 = Mahasiswa::where('nrp',$request->nrp)->first();
        $unik2 = Dosen::where('nik',$request->nrp)->first();
        $leaderboard = new Leaderboard;
        $register = new Register;

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


        if($unik1 == null && $unik2 == null)
        {
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


          if($request->role == "Mahasiswa")
          {
            $mahasiswa = new Mahasiswa;
            $mahasiswa->nrp = $request->nrp;
            $mahasiswa->namaMhs = $request->nama;
            $mahasiswa->email = $request->email;
            $mahasiswa->fakultas = $request->fakultas;
            $mahasiswa->prodi = $request->prodi;
            $mahasiswa->tanggalLahir = $newDate;
            $mahasiswa->alamat = $request->alamat;
            $mahasiswa->role = $request->role;
            $mahasiswa->kota = $request->kota;
            $mahasiswa->telephone = $request->telephone;
            $mahasiswa->streamlink = $request->streamlink;
            $mahasiswa->password = md5($request->password);
            $mahasiswa->about = $request->about;
            $mahasiswa->level = 1;
            $mahasiswa->experience = 1;
            $mahasiswa->foto = $gambar_name;
            $mahasiswa->warna = "red";
            $mahasiswa->status = "aktif";
            $mahasiswa->save();

            $leaderboard->nama = $request->nama;
            $leaderboard->nrp = $request->nrp;
            $leaderboard->emas = 0;
            $leaderboard->perak = 0;
            $leaderboard->perunggu = 0;
            $leaderboard->total = 0;
            $leaderboard->save();
          }
          else if($request->role == "Dosen")
          {
            $dosen = new Dosen;
            $dosen->nik = $request->nrp;
            $dosen->namaDosen = $request->nama;
            $dosen->email = $request->email;
            $dosen->fakultas = $request->fakultas;
            $dosen->prodi = $request->prodi;
            $dosen->tanggalLahir = $newDate;
            $dosen->alamat = $request->alamat;
            $dosen->role = $request->role;
            $dosen->kota = $request->kota;
            $dosen->telephone = $request->telephone;
            $dosen->streamlink = $request->streamlink;
            $dosen->password = md5($request->password);
            $dosen->about = $request->about;
            $dosen->level = 1;
            $dosen->experience = 1;
            $dosen->foto = $gambar_name;
            $dosen->warna = "red";
            $dosen->status = "aktif";
            $dosen->save();
          }

        session()->flash('registerBerhasil','Register Berhasil');
        }
        else {
          session()->flash('registerGagal','Register Gagal');
        }

        return redirect('register');
    }



}
