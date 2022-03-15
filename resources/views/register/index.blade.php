@extends('layouts.auth')

@section('content')
    <div>
        <h2 class="text-center">Daftarkan Dirimu</h2>
        <form action="/register" method="POST" class="mt-4 text-center">
            @csrf


            <div class="form-floating ">
                <input type="text" name="name" class="form-control input-border ps-3 @error('name') is-invalid @enderror"
                    id="name" placeholder="Name" required value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <br>

            <div class="form-floating input-border">
                <input type="email" name="email" class="form-control input-border ps-3 @error('email') is-invalid @enderror"
                    id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <br>

            <div class="form-floating input-border">
                <input type="password" name="password"
                    class="form-control input-border ps-3 @error('password') is-invalid @enderror" id="password"
                    placeholder="Password" required value="{{ old('password') }}">
                <label for="password">Password</label>
                <i class="fa fa-eye text-right"></i>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <br>
            <br>

            <button class="w-50 btn btn-auth" type="submit">Register</button>

        </form>
        <small class="d-block text-center mt-4">Sudah punya akun? <a href="/login" class="auth-change">Langsung masuk aja!</a></small>
    </div>


@endsection
