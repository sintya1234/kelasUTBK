@extends('layouts.main')
@section('container')
    <h1>{{ $sub_materi->nama_sub_materi }}</h1>
    {{-- @foreach ($sub_materi->bab_materis as $bab_materi)
        <li><a href="/dashboard/materi/{{ $materi->slug }}/{{ $sub_materi->slug }}/{{ $bab_materi->slug }}"><button type="button" class="btn btn-outline-secondary">{{ $bab_materi->judul_bab }}</button></a>
        </li><br>
    @endforeach --}}




    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul Sub Bab</th>
                    <th scope="col">Baca materi</th>
                    <th scope="col">Download materi</th>
                    <th scope="col">Vidio pembelajaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sub_materi->bab_materis as $bab_materi)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $bab_materi->judul_bab }}</td>
                        <td>
                            <a href="{{ url('/baca', $bab_materi->slug) }}">Baca</a>
                        </td>
                        <td>
                            <a href="{{ url('download', $bab_materi->file_materi) }}">download</a>
                        </td>
                        <td>
                            <a href="/dashboard/materi/{{ $materi->slug }}/{{ $sub_materi->slug }}/{{ $bab_materi->slug }}/video">nonton vidio</a>
                           
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
