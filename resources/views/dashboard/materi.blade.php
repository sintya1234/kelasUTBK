@extends('layouts.main')
@section('container')

@foreach ($materis as $materi)
<li><a href="/dashboard/materi/{{ $materi->id }}"><button type="button" class="btn btn-outline-secondary">{{ $materi->nama_materi }}</button></a></li><br>
@endforeach
@endsection

