<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\materiController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\tryoutController;
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

// Route::get('/login', function () {
//     return view('login.index');
// });

Route::get('/login', [loginController::class,'index']);
Route::post('/login', [loginController::class,'authenticate']);

Route::get('/register', [registerController::class, 'index']);
Route::post('/register', [registerController::class, 'storeWeb']);

Route::post('/logout', [LoginController::class,'logout']);

Route::get('/register', function () {
    return view('register.index');
});

Route::get('/dashboard', function () {
    return view('dashboard/utama');
});

Route::get('/dashboard/tryout', [tryoutController::class, 'index']);

Route::get('/dashboard/tryout/{materi:slug}', [tryoutController::class, 'pilihNomorTryout']);

// Route::get('/dashboard/banksoal', function () {
//     return view('/dashboard/bank_soal');
// });

// Route::get('/dashboard/banksoal', function () {
//     return view('/dashboard/bank_soal');
// });

// Route::get('/dashboard/materi', function () {
//     return view('/dashboard/materi');
// });

Route::get('/dashboard/materi', [ materiController::class, 'index']);

// Route::get('/dashboard/materi/{materi}', function () {
//     return view('/dashboard/sub_materi');
// });
Route::get('/dashboard/materi/{materi:slug}', [materiController::class,'show']);

Route::get('/dashboard/materi/{materi:slug}/{sub_materi:slug}', [materiController::class,'show_bab_materi']);

Route::get('/dashboard/materi/{materi:slug}/{sub_materi:slug}/{bab_materi:slug}/video', [materiController::class,'show_vidio']);

// Route::get('/dashboard/materi/{materi:slug}/{sub_materi:slug}/{bab_materi:slug}', [materiController::class,'bab_materi']);

route::get('/baca/{bab_materi:slug}', [materiController::class, 'baca_bab_materi']);

route::get('download/{file_materi}', [materiController::class, 'download_file_materi']);

route::get('/dashboard/bank_soal/', [materiController::class, 'index_bank_soal']);

// /dashboard/materi/{{ $materi->slug }}/{{ $sub_materi->slug }}/{{ $bab_materi->slug }} 

Route::get('/dashboard/kalender', function () {
    return view('/dashboard/kalender');
});

Route::get('/dashboard/result', function () {
    return view('/dashboard/result');
});

Route::get('/profile', function () {
    return view('/profile.show');
});
Route::get('/', function () {
    return view('/home');
});
Route::get('/vidio', function () {
    return view('/dashboard/vidio');
});