@extends('layouts.main')
@section('container')

    <h1>Quiz</h1>
    @foreach ($materis as $materi)
        <a href="/dashboard/tryout/{{ $materi->slug }}" type="button" class="btn btn-primary">{{$materi->nama_materi}}</a>
    @endforeach
@endsection
