<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $user = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8'
        ]);
        
        $check = DB::table('users')->where('email', $request->email)->first();

        if (Auth::attempt($credentials)) {
           $request->session()->regenerate();
           return redirect()->intended('/');
        } else {
            if($check != null){
                return back()->with('loginError', 'Login Gagal');
            }else{
                return back()->with('loginError', 'Username atau Password salah');
            }
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }

    private function isLogin(int $id)
    {
        $user = User::findOrFail($id);
        return $user->update([
            'status_login' => 1
        ]);
    }
}
