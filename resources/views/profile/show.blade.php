@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="main-body">

            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav>

            {{-- @if (session()->has('success'))
                <div class="alert alert-success col-lg-8" role="alert">
                    {{ session('success') }}
                </div>
            @endif --}}
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">

                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                               
                               
                                    {{-- @if (auth()->user()->photo=null) --}}
                                    <img src="https://raihmimpi.id/assets/img/ava-donatur.png" alt="Admin"
                                class="rounded-circle" width="150">
                                {{-- @else --}}
                                {{-- <img src="{{ asset('storage/' . auth()->user()->photo) }}"
                                    class="rounded-circle" width="150"> --}}
                                {{-- @endif --}}
                              
                                
                               
                                <div class="mt-3">
                                    {{-- <h4> {{ auth()->user()->username }}</h4>
                                    <h5> {{auth()->user()->email}} </h5>
                                    <h6>{{  auth()->user()->school}}</h6> --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Name: Farren </h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{-- {{ auth()->user()->name }} --}}
                                </div>
                            </div>
                            <hr>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email: Farren@gmail.com</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{-- {{ auth()->user()->email }} --}}
                                </div>
                            </div>
                            <hr>
                           
                           
                           

                            <div class="row">
                                <div class="col-sm-12">
                                    {{-- <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a> --}}
                                    <a href=".../edit" class="btn btn-info"><span
                                            data-feather="edit"></span>Edit</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
