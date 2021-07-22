<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/painel', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('auth/register');
});
