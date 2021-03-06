@extends('layouts.main')

@section('container')
    <div class="row justify-content-center text-center align-items-center">
        <h1 class="h1 mt-4">Latih kemampuanmu yuk!</h1>
        <div class="col-4 mt-4">
            <a href="/dashboard/result" class="btn btn-auth w-75 rounded-corners">
                <div class="d-flex justify-content-center align-items-center">
                    Cek hasil tryout mu disini
                    <i class="bi bi-book icon ms-3"></i>
                </div>
            </a>
        </div>
        <div class="col-4 mt-4">
            <a class="btn btn-auth w-75 rounded-corners">
                <div class="d-flex justify-content-center align-items-center">
                    Pelajari materinya disini
                    <i class="bi bi-book icon ms-3"></i>
                </div>
            </a>
        </div>
        <div class="border border-3 glass-area my-4 w-75 px-5 py-4 rounded-corners">
            @for ($i = 0; $i < 10; $i++)
                <div class="my-4 row align-items-center">
                    <div class="col d-flex">
                        <h2 class="h5 fw-bold">Try Out {{ $i + 1 }}</h2>
                        <p class="ms-3">120 menit</p>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <button class="btn btn-auth">
                            Kerjakan
                        </button>
                    </div>
                </div>

            @endfor
        </div>
    </div>

@endsection
