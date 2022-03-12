<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
{{-- bootstrap Icons --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
{{-- My Style --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
{{-- <link rel="stylesheet" href="{{mix('css/app.css')}}"> --}}

<link rel="stylesheet" href="/css/app.css"><title></title> 
    <title>@yield('title')</title>
</head>
<body class="bg-warning auth-bg-size d-flex justify-content-center align-items-center">
    <div class="row w-50">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show position-absolute w-50" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="col">
            <div class="d-flex justify-content-center me-4">
                <img src="/image/logo.png" width="60" height="60">
                <h1 class="mt-2">Online Class</h1>
            </div>
            <div class="bg-white rounded-lg my-4 p-5 rounded-corners">
                @yield('content')
            </div>
        </div>
    </div> 
    
</body>
</html>