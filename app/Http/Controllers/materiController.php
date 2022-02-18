<?php

namespace App\Http\Controllers;

use App\Models\materi;
use App\Models\sub_materi;
use App\Models\bab_materi;
use App\Models\bank_soal;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Storage;

class materiController extends Controller
{
    public function index()
  {
    // $sej11_level =  Sej11_Level::all();
    // $sej11_gambar_materi= Sej11_gambar_materi::all();
    // return view('/materis',compact('sej11_level','sej11_gambar_materi'));

    $materis = materi::all();
    return view('/dashboard/materi/index', compact('materis'));
  }
  public function show(materi $materi)
  {
    return view('/dashboard/materi/sub_materi',compact('materi') );
  }
  public function show_bab_materi(materi $materi, sub_materi $sub_materi)
  {
   // asset('storage/' . $poss->image);
    return view('/dashboard/materi/bab_materi',compact('materi','sub_materi') );
  }

  public function baca_bab_materi(bab_materi $bab_materi)
  {
    return view('/dashboard/materi/baca',compact('bab_materi') );
    // return view('/dashboard/     ',compact('materi','sub_materi', 'bab_materi') );
  }
  public function download_file_materi($file_materi)
  {
   return response()->download(public_path('storage/folder_PDF/'.$file_materi));
  }

  public function show_vidio(materi $materi,sub_materi $sub_materi, bab_materi $bab_materi)
  {
    return view('/dashboard/materi/vidio',compact('materi','sub_materi','bab_materi') );
  }
  
  public function index_bank_soal()
  { 
    $materis=materi::where('id', 1)
     ->orWhere('id', 2)->get();;
    
    return view('/dashboard/bank_soal/index',compact('materis') );
  }

  public function index_bank_soal_list(materi $materi)
  { 
    return view('/dashboard/bank_soal/bank_soals',compact('materi') );
  }

  public function index_bank_soal_baca(materi $materi, bank_soal $bank_soal)
  { 
   
    return view('/dashboard/bank_soal/baca',compact('materi','bank_soal') );
  }

}



