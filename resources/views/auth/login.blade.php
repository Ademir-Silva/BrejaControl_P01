<head>
    <link rel="stylesheet" href="css/log.css">
</head>

@extends('layouts.template')

@section('title', 'BrejaControl | Login')

<img src="images/Logo 1.png" alt="">

<div class="box">
    <form action="{{ url('/') }}" method="post">
        <h1>Login</h1>
        
        <div class="input">
            <input type="email" name="email" id="">
            {{-- <label for="">Email</label> --}}
        </div>

        <div class="input">
            <input type="password" name="password" id="">
            {{-- <label for="">Senha</label> --}}
        </div>
        
        <button type="submit">Login</button>
    </form>
</div>