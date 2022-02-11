<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    // public function index()
    // {
    //     return view('register.index', [
    //         'title' => 'Register'
    //     ]);
    // }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required|max:200',
    //         'email' => 'required|unique:users',
    //         'password' => 'required|min:5|max:255'
    //     ]);

    //     $validatedData['password'] = bcrypt($validatedData['password']);
    //      $validatedData['password']= Hash::make($validatedData['password']);
    //     User::create($validatedData);

    //     $request->session()->flash('success', 'Registrasi berhasil !! silahkan login');

    //     return redirect('/login')->with('success', 'Registrasi berhasil !! silahkan login');
    // }

        private function newUser(array $data){
            return User::create([
                'name' =>$data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'created_at'=>\Carbon\Carbon::now(),
                'email_verified_at'=> \Carbon\Carbon::now()
            ]);
        }
        public function index(){
            return view('register.index', [
                'title'=>'Register'
            ]);
        }

        public function storeWeb(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        $user = $this->newUser($request->all());
    
        if(empty($user)){
            return response([
                'massage'=>'Failed to create account'
            ]);    
        }else{
                return redirect('/login')->with('success', 'Registration successfuul !! please login');
        }
    }
}
