<?php

namespace App\Http\Controllers;

use App\Models\materi;
use App\Models\tryout;
use Illuminate\Http\Request;

class tryoutController extends Controller
{
    //
    public function index() {
        
        $materis = materi::all()->take(2);
        return view('/dashboard/tryout/index', compact('materis'));
    }

    public function pilihNomorTryout(materi $materi) {
        $tryouts = tryout::where('materi_id', $materi->id)->get();
        return view('/dashboard/tryout/numbering', compact('tryouts'));
    }
}
