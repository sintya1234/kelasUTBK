@extends('layouts.main')
@section('container')
<h1>Judul bab</h1>

<iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $vidio_materi->file_vidio_materi }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

@endsection