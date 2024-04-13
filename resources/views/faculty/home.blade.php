@extends('layouts.layout')
@section('content')
@if (session('success'))
    <div class="alert alert-success mb-2">
        {{ session('success') }}
    </div>
@endif
@endsection