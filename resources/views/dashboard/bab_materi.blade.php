@extends('layouts.main')
@section('container')

    <h1>{{ $materi }}</h1>
    
    @foreach ($materi->sub_materis as $sub_materi)
        @foreach ($sub_materi->bab_materis as $bab_materi)
        {{ dd($bab_materi->judul_bab) }}
            <li><a href="/dashboard/materi/{{ $materi->slug }}/{{ $sub_materi->slug }}/{{ $bab_materi->$slug }}"><button
                        type="button" class="btn btn-outline-secondary">{{ $bab_materi->judul_bab }}</button></a></li><br>
        @endforeach
    @endforeach
@endsection
