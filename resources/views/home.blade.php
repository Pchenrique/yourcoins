<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Perfil</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style_home.css')}}">
</head>
<body>
    <div class="parallax">
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img  src="img/logo.png" width="215" height="76" class="d-inline-block align-top" alt="">
                <div class="perfil text-center pt-4">{{$user->name}}</div>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="{{route('home')}}" data-toggle="collapse" aria-expanded="false"><i class="fas fa-home"></i> Home</a>
                </li>

                <li>
                    <a href="{{route('saque.create')}}"><i class="fas fa-arrow-alt-circle-right"></i> Saques</a>
                </li>

                <li>
                    <a href="{{route('deposito.create')}}"><i class="fas fa-arrow-alt-circle-left"></i> Depósitos</a>
                </li>

                <li>
                    <a href="{{route('trade.index')}}"><i class="fas fa-chart-bar"></i> Meus Trader</a>
                </li>

                <li>
                    <a href="{{route('suporte.create')}}"><i class="fas fa-phone"></i> Suporte</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->

        <div id="content">
            
            <nav class="navbar" id="barra">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>

                    <button type="button" class="btn btn-btc">
                        <img src="https://img.icons8.com/metro/26/000000/bitcoin.png"><span>{{$user->saldo->valordisponivel}} BTC</span>
                    </button>
                </div>
            </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-6 card-um text-white">
                    Aqui vai alguma coisa!
                </div>

                <div class="col-md-7 card-dois text-white">
                    Aqui vai alguma coisa!
                </div>
            </div>
            
        </div>        
            
        </div>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>
</html>
