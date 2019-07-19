<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>YourCoins</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/style_welcome.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
         
    </body>
</html>


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white" style="background-color: rgba(0,0,0,.8);">
                <div class="card-header" style="border-color: #ed8200;">{{ __('Verifique seu endereço de email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
