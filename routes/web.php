<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FacultyController;
use App\Http\Middleware\EnsureAdmin;
use App\Models\Faculty;
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
})->middleware('auth', 'verified');

Route::get('/faculty/add-details', function () {
    return view('faculty.add-details');
})->middleware('auth', 'verified')->name('add-details');

Route::post('/faculty/add-details', [FacultyController::class, 'create']);

// Admin Routes
Route::get('/admin/login', function () {
    return view('admin.login');
});
Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/logout', [AdminController::class, 'logout']);

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(EnsureAdmin::class);