@extends('layouts.main')
@section('container')
@foreach ($materis as $materi)
<li><a href="/dashboard/bank_soal/{{ $materi->slug }}"><button type="button" class="btn btn-outline-secondary">{{ $materi->nama_materi }}</button></a></li><br>
@endforeach
@endsection

