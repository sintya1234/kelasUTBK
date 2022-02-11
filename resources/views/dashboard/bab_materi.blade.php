@extends('layouts.main')
@section('container')

{<h1>{{ $materi }}</h1>
<button type="button" class="btn btn-primary">pengentar ...</button> --}}

@foreach ($materis as $materi)
<li><a href="/dashboard/materi/{materi}/{{  }}"><button type="button" class="btn btn-outline-secondary">{{ $materi->nama_materi }}</button></a></li><br>
@endforeach
@endsection