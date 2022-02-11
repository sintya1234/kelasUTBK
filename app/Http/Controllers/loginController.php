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
            'status_login' => 0,
     
        ];

        $check = DB::table('users')->where('email', $request->email)->first();

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
           
                if ($check->status_login == 0) {
                    if (Auth::attempt($user)) {
                        $this->isLogin(Auth::id());

                        $request->session()->regenerate();
                        return redirect()->intended('/');
  
                    } else {
                        return back()->with('loginError', 'Login failed');
                    }
                } else {
                    $request->session()->regenerate();
                    return redirect()->intended('/');
                }
            
        } else {
            return back()->with('loginError', 'Login failed');
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
