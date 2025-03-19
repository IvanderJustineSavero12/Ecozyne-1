<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KomunitasController;

Route::get('/login', function () {
    return view('/login');
});

Route::get('/register', function () {
    return view('/register');
});

// fungsi Registrasi
Route::post('/register-post', [UserController::class, 'register']);

// Dashboard

Route::get('/dashboard/index', function () {
    return view('/dashboard/index');
});

Route::get('/dashboard/form', function () {
    return view('/dashboard/form');
});

// luar

Route::get('/index', function () {
    return view('/index');
});

Route::get('/blog', function () {
    return view('/blog');
});

Route::get('/portfolio-details', function () {
    return view('/portfolio-details');
});

Route::get('/blog-details', function () {
    return view('/blog-deatils');
});

