<?php

namespace App\Http\Controllers;

use App\Models\materi;
use App\Models\penghubung_user_tryouts;
use App\Models\tryout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class tryoutController extends Controller
{
    //
    public function index() {
        $tryouts = penghubung_user_tryouts::where('users_id', Auth::user()->id)->get();
        $page = "tryout";
        return view('/dashboard/tryout/index', compact('tryouts', 'page'));
    }

    public function tryout($id) {
        
        return view('dashboard.tryout.tryout');
    }
}
