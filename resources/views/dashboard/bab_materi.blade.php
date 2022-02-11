@extends('layouts.main')
@section('container')

    <h1>{{ $sub_materi->nama_sub_materi }}</h1>
     @foreach ($sub_materi->bab_materis as $bab_materi)
        <li><a href="/dashboard/materi/{{ $materi->slug }}/{{ $sub_materi->slug }}/{{ $bab_materi->slug }}"><button type="button" class="btn btn-outline-secondary">{{ $bab_materi->judul_bab }}</button></a>
        </li><br>
    @endforeach
@endsection
