<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login.index');
});

Route::get('/register', function () {
    return view('register.index');
});

Route::get('/dashboard', function () {
    return view('dashboard/utama');
});

Route::get('/dashboard/tryout', function () {
    return view('/dashboard/bank_soal');
});

Route::get('/dashboard/banksoal', function () {
    return view('/dashboard/bank_soal');
});

Route::get('/dashboard/banksoal', function () {
    return view('/dashboard/bank_soal');
});

Route::get('/dashboard/materi', function () {
    return view('/dashboard/materi');
});

Route::get('/dashboard/materi/{materi}', function () {
    return view('/dashboard/sub_materi');
});

Route::get('/dashboard/materi/{materi}/{bab_materi}', function () {
    return view('/dashboard/bab_materi');
});

Route::get('/dashboard/kalender', function () {
    return view('/dashboard/kalender');
});

Route::get('/dashboard/result', function () {
    return view('/dashboard/result');
});

Route::get('/profile', function () {
    return view('/profile.show');
});
Route::get('/home', function () {
    return view('/home');
});
