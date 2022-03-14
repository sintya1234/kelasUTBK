@extends('layouts.main')
@section('container')
    <div class="row justify-content-center text-center">
        <h1 class="h1 mt-4">Latih kemampuanmu yuk!</h1>
        <div class="col-4 mt-4">
            <button class="btn btn-warning w-75">
                Cek hasil try outmu disini
            </button>
        </div>
        <div class="col-4 mt-4">
            <button class="btn btn-warning w-75">
                Pelajari materinya disini
            </button>
        </div>
        <div class="border border-3 border-warning my-4 w-75 px-5 py-4 rounded-corners">
            @for ($i = 0; $i < 10; $i++)
                <div class="my-2 row">
                    <div class="col d-flex">
                        <h2 class="h5 fw-bold">Try Out {{ $i + 1 }}</h2>
                        <p class="ms-3">120 menit</p>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <button class="btn btn-warning">
                            Kerjakan
                        </button>
                    </div>
                </div>
                
            @endfor
        </div>
    </div>
    
@endsection
