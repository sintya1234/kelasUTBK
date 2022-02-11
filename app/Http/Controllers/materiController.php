<?php

namespace App\Http\Controllers;

use App\Models\materi;

use Illuminate\Http\Request;

class materiController extends Controller
{
    public function index()
  {
    // $sej11_level =  Sej11_Level::all();
    // $sej11_gambar_materi= Sej11_gambar_materi::all();
    // return view('/materis',compact('sej11_level','sej11_gambar_materi'));

    $materis = materi::all();
    return view('/dashboard/materi', compact('materis'));
  }

  public function show(materi $materi)
  {
    return view('/dashboard/sub_materi',compact('materi') );
  }


  public function show_bab_materi(materi $materi)
  {
    return view('/dashboard/bab_materi',compact('materi') );
  }
}
