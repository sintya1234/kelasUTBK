@extends('layouts.main')
@section('container')

@foreach ($bab_materi->vidio_materis as $vidio_materi)
<h1>{{ $vidio_materi->judul_vidio_materi }}</h1>
{{!! $vidio_materi->file_vidio_materi!!}}

@endforeach
@endsection