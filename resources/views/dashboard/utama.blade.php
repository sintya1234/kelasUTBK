@extends('layouts.main')
@section('container')
    <H1>Hallo, Farren</H1>

    <div>
        <a href="/dashboard/materi" class="btn btn-primary">Materi</a>
    </div>

    <div>
        <a href="/dashboard/banksoal" class="btn btn-secondary">Bank Soal</a>
    </div>

    <div>
        <a href="/dashboard/tryout" class="btn btn-success">Try Out</a>
    </div>

    <div>
        <a href="/dashboard/kalender" class="btn btn-danger">Kalender</a>
    </div>

    <div>
        <a href="/dashboard/result" class="btn btn-warning">Result</a>
    </div>

@endsection

