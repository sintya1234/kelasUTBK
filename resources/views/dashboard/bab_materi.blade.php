@extends('layouts.main')
@section('container')

    <h1>{{ $materi->nama_materi }}</h1>
    
    @foreach ($materi->sub_materis as $sub_materi)
        @foreach ($sub_materi->bab_materis as $bab_materi)
            <li><a href=""><button type="button" class="btn btn-outline-secondary">{{ $bab_materi->judul_bab }}</button></a></li><br>
        @endforeach
        {{-- /dashboard/materi/{{ $materi->slug }}/{{ $sub_materi->slug }}/{{ $bab_materi->$slug }} --}}
    @endforeach
@endsection
