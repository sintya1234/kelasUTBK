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
        $user = Auth::user();
        return view('/dashboard/tryout/index', compact('tryouts', 'page', 'user'));
    }

    public function tryout($id) {
        return view('dashboard.tryout.tryout');
    }

    public function hasilTryout(){
        $page = "tryout";
        $user = Auth::user();
        return view('dashboard.tryout.hasilTryout', compact('page', 'user'));
    }
}
