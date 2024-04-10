@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card mt-3" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        Register New Faculty
                    </h5>
                    <hr>
                    <form action="{{ route('register') }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                placeholder="Name" value="{{ old('name') }}"/>
                            @error('name')
                                <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                                placeholder="Email" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert"> {{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <input type="password" class="form-control" name="password_confirmation"
                                placeholder="Confirm Password">
                        </div>

                        <button class="btn btn-block btn-dark" type="submit"><i class="bi bi-box-arrow-in-right"></i>
                            Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection