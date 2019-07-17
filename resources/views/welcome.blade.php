<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style_welcome.css') }}" rel="stylesheet">
    </head>
    <body>
<div class="parallax">
<nav class="navbar navbar-expand-lg static-top">
  <div class="container">
                <!-- LOGO -->
        <a class="navbar-brand" href="#">
            <img  src="img/logo.png" width="215" height="76" class="d-inline-block align-top" alt="">
        </a>

                <!-- BOTÃO MOVEL -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
          @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a class="nav-link font-weight-bolder" href="{{ url('/home') }}">Home</a>
                        <span class="sr-only">(current)</span>
                    </li>
                    @else

                    <li class="nav-item">
                        <a style="" class="nav-link font-weight-light text-white" href="{{ route('login') }}"><span class="detalhes_barra_titulo">ENTRAR</span></a>
                        <span class="sr-only">(current)</span>
                    </li>
                        @if (Route::has('register'))
                            <li class="nav-item"> 
                                <a class="nav-link font-weight-light text-white" href="{{ route('register') }}"><span class="detalhes_barra_titulo">REGISTRAR-SE</span></a>
                                <span class="sr-only">(current)</span>
                            </li>
                        @endif
                    @endauth
                </div>
            @endif
      </ul>
  </div>

</nav>

         
         
    </body>
</html>
