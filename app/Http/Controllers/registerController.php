<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
         $validatedData['password']= Hash::make($validatedData['password']);
        User::create($validatedData);

        $request->session()->flash('success', 'Registrasi berhasil !! silahkan login');

        return redirect('/login')->with('success', 'Registrasi berhasil !! silahkan login');
    }
}
