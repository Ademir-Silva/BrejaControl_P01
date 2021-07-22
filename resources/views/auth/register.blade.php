<head>
    <link rel="stylesheet" href="css/auth.css">
</head>

@extends('layouts.template')

@section('title', 'BrejaControl | Cadastre-se')

<div class="box">

    <img src="images/Logo 1.png" alt="logo BrejaControl">

    <form action="{{ url('/') }}" method="post">
    @csrf
        <h1>Cadastro</h1>
        
        <div class="input">
            {{-- <label for="">Nome</label> --}}
            <input type="password" name="password" placeholder="Nome" id="">
        </div>

        <div class="input">
            {{-- <label for="">Email</label> --}}
            <input type="email" name="email" placeholder="E-mail" id="">
        </div>

        <div class="input">
            {{-- <label for="">Senha</label> --}}
            <input type="password" name="password" placeholder="Senha" id="">
        </div>
        
        <div class="links">
            <p>Já tem uma conta?<a href="{{ url('/') }}"> <b>Logar</b></a></p>
        </div>

        <button type="submit">Cadastrar</button>
    </form>
    
</div>
