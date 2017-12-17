<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
      return view("blog/coba");
    }

    public function show($id)
    {
      $nilai = 'oh kitu jadi kudu salto '. $id. 'kali kitu ?';
      $users = ['hilman','nono','nana'];
      return view('blog/single',['blog' => $nilai , 'users' => $users]);
    }
}
