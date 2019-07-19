@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>YourCoins - Redefinir Senha</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/style_welcome.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style_login.css') }}" rel="stylesheet">

        <!-- script -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="parallax">
        <nav class="navbar navbar-expand-lg static-top">
          <div class="container">
                        <!-- LOGO -->
                <a class="navbar-brand" href="/yourcoins/public/">
                    <img  src="../img/logo.png" width="215" height="76" class="d-inline-block align-top" alt="">
                </a>

                        <!-- BOTÃO MOVEL -->
                <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="glyphicon glyphicon-search"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
              
          </div>

        </nav>

@section('content')
<div class="container">
     <div class="row justify-content-center my-5">
        <div class="col-md-5">
            <div class="card text-white" style="background-color: rgba(0,0,0,.8);">
                <div class="card-header" style="border-color: #ed8200;">{{ __('Redefinir senha') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

        

                            <div class="col-md-12 form-label-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Digite seu email">
                                <label for="email">Endereço de Email</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                
                            <div class="col-md-12">
                                <button class="btn btn-outline-info btn-block text-white" id="btn-login-reset" type="submit">{{ __('Enviar email') }}</button>

                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>