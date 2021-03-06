@extends('layouts.auth')

@section('content')
    @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div>
        <h2 class="text-center">Selamat Datang Kembali</h2>
        <form action="/login" method="post" class="mt-4 text-center">
            @csrf
            <div class="form-floating">
                <input type="email" name="email" class="form-control input-border ps-3 @error('name') is-invalid @enderror" id="email"
                    placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>
            <br>
            <div class="form-floating">
                <input type="password" class="form-control input-border ps-3" id="password" name="password" placeholder="Password"
                    required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <label for="password">Password</label>
            </div>

            <br>
            <br>

            <button class="w-50 btn btn-auth" type="submit">Login</button>
            {{-- <div class="col-sm-6">
                <button type="button" class="btn btn-block btn-sm btn-twitter">
                    <i class="fa fa-google mr-2"></i>
                    Signin with Google
                </button>
            </div> --}}
        </form>
        <small class="d-block text-center mt-4">Belum punya akun? <a href="/register" class="auth-change">Daftar sekarang yuk!</a></small>
    </div>
@endsection
