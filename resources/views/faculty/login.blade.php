@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card mt-3" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        Sign into your faculty account
                    </h5>
                    <hr>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control mb-2 @error('email') is-invalid @enderror" name="email"
                                placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control mb-2 @error('password') is-invalid @enderror"
                                name="password" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <button class="btn btn-block btn-success" type="submit"><i class="bi bi-box-arrow-in-right"></i>
                            Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection