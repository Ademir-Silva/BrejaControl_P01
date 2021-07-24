<head>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/painel.css">
</head>

@extends('layouts.template')

@section('title', 'BrejaControl | Página Inicial')

@extends('layouts.menu')

@section('section-grid')

  <div class="container">

    <div class="row">
        <div class="col-xl-3 col-sm-6 col-12">
            <a href="{{ url('/painel/criar_receita') }}">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="icon">
                                    <div class="align-self-center">
                                        <i class="icon-pencil primary font-large-2 float-left"></i>
                                    </div>
                                </div>
                                <div class="media-body text-center">
                                    <h3>Criar <br/>Receita</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <a href="{{ url('/create_recipe/') }}">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="icon">
                                    <div class="align-self-center">
                                        <i class="icon-speech warning font-large-2 float-left"></i>
                                    </div>
                                </div>
                                <div class="media-body text-center">
                                    <h3>Receitas <br/>Salvas</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <a href="{{ url('/create_recipe/') }}">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="icon">
                                    <div class="align-self-center">
                                        <span class="material-icons md-48">book</span>
                                    </div>
                                </div>
                                <div class="media-body text-center">
                                    <h3>Cadastrar Ingredientes</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

  </div>

  <footer>

    <b>
      <a class="links" href="#">BJCP</a>
      <a class="links" href="#">Sobre</a>
      <a class="links" href="#">Créditos</a>
    </b>

  </footer>

@endsection
