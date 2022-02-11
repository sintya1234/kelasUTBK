@extends('layouts.main')
@section('container')

<H1>{{ $materi->nama_materi}}</H1>

@foreach ($materi->sub_materis as $sub_materi)
<li><a href="/dashboard/materi/{{ $materi->slug }}/{{ $sub_materi->slug }}"><button type="button" class="btn btn-outline-secondary">{{ $sub_materi->nama_sub_materi }}</button></a></li><br>
@endforeach
@endsection