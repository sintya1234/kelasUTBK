@extends('layouts.main')
@section('container')
yooo
 @foreach ($materi->bankSoals as $bank_soal)

<li><a href="/dashboard/bank_soal/{{ $materi->slug }}/{{ $bank_soal->slug }}/baca"><button type="button" class="btn btn-outline-secondary">{{ $bank_soal->judul_bank_soal }}</button></a></li><br> 
@endforeach 
@endsection