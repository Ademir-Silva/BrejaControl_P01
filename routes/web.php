<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/registro', function () {
    return view('auth/register');
});

Route::get('/painel', function () {
    return view('index');
});

Route::get('/painel/criar_receita', function () {
    return view('create_recipe/revenue');
});


Route::get('LoginController', 'LoginController@logar');
