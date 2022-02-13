@extends('layouts.main')
@section('container')

    <h1>Quiz</h1>
    @foreach ($tryouts as $tryout)
        <li><a href="/dashboard/tryout/{{ $tryout->materi->slug }}/{{ $tryout->nomor_tryout }}" type="button" class="btn btn-outline-secondary">Tryout {{$tryout->nomor_tryout}}</a></li>
        <br>
    @endforeach
@endsection
