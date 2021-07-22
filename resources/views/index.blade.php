@extends('layouts.template')
@section('title', 'BrejaControl | Página Inicial')
@extends('layouts.menu')


@section('section-grid')

<div class="container">
    <div class="row row-cols-3" id="card">

      <div class="col card">
        <h1>Criar Receita</h1>
      </div>

      <div class="col card">
        <h1>Receitas Salvas</h1>
      </div>

      <div class="col card">
        <h1>Cadastrar Ingredientes</h1>
      </div>

    </div>
  </div>

@endsection






