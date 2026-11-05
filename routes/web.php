<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/detail-artikel', function () {
    return view('detail-artikel');
});