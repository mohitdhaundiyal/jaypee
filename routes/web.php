<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Faculty Routes
Route::get('/faculty/register', function () {
    return view('faculty.register');
});

Route::get('/faculty/login', function () {
    return view('faculty.login');
});

Route::get('/faculty/home', function () {
    return view('faculty.home');
});

Route::get('/faculty/add-details', function () {
    return view('faculty.add-details');
})->name('add-details');

Route::get('/faculty/add-details', function () {
    return view('faculty.add-details');
})->name('add-details');