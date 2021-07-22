<head>
    <link rel="stylesheet" href="css/auth.css">
</head>

@extends('layouts.template')

@section('title', 'BrejaControl | Login')

<div class="box">

    <img src="images/Logo 1.png" alt="logo BrejaControl">

    <form action="{{ url('/painel') }}" method="post">
    @csrf
        <h1>Login</h1>
        
        <div class="input">
            {{-- <label for="">Email</label> --}}
            <input type="email" name="email" placeholder="E-mail" id="">
        </div>

        <div class="input">
            {{-- <label for="">Senha</label> --}}
            <input type="password" name="password" placeholder="Senha" id="">
        </div>

        <div class="links">
            <a href="{{ url('/register') }}">Cadastrar-me</a>
            <a href="#">Esqueci a senha</a>
        </div>
        
        <button type="submit">Login</button>
    </form>
</div>
