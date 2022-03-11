@extends('layouts.main')
@section('container')

    {{-- <h1>Quiz</h1>
    @foreach ($materis as $materi)
        <a href="/dashboard/tryout/{{ $materi->slug }}" type="button" class="btn btn-primary">{{$materi->nama_materi}}</a>
    @endforeach --}}

    {{-- navbar --}}
    <h1>Tryout</h1>
        {{-- Waktu --}}
    
    {{-- Topik di atas penomoran --}}
    {{-- Penomoran di kanan --}}
    {{-- Soal di kiri --}}
    <h1>Soal 3</h1>
    <div>
        Lorem ipsum Lorem ipsum  Lorem ipsum  Lorem ipsum  Lorem ipsum  Lorem ipsum  Lorem ipsum  Lorem ipsum  Lorem ipsum  Lorem ipsum  Lorem ipsum  Lorem ipsum   
    </div>
    {{-- Jawaban pilgan di bawah soal --}}
    <div>
        <div>
            A. Lorem ipsum
        </div>
        <div>
            B. Lorem ipsum
        </div>
        <div>
            C. Lorem ipsum
        </div>
        <div>
            D. Lorem ipsum
        </div>
        <div>
            E. Lorem ipsum
        </div>
    </div>
@endsection
