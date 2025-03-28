<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KomunitasController;

// login

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




// admin

Route::get('/admin/index', [UserController::class, 'data_pengguna']);

Route::get('/admin/view-komunitas', [UserController::class, 'data_komunitas']);


Route::get('/admin/add-komunitas', function () {
    return view('/admin/add-komunitas');
});


Route::get('/admin/form', function () {
    return view('/admin/form');
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

