@extends('layouts.main')
@section('container')

<iframe height="400" widht="400" scr="/storage/folder_PDF/{{ $bab_materi->file_materi }}">test
</iframe>

<iframe width="560" height="315" scr="/folder_PDF/{{ $bab_materi->file_materi }}"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
@endsection