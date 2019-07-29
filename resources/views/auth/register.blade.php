<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Registro - YourCoins</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style_cadastro.css')}}">
</head>
<body>
  <nav class="navbar navbar-expand-lg static-top navbar-dark">
       

  </nav>
  <div class="container">

      <div class="row justify-content-center">

          <div class="col-md-6">
              
          </div>
      </div>
      <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-6 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">

            <center>
                 <a class="navbar-brand" href="/yourcoins/public/">
                    <img  src="img/logo.png" width="235" height="76" class="d-inline-block align-top" alt="">
                 </a>
             </center>

              <h5 class="card-title text-center text-white my-3">{{ __('Registro') }}</h5>
              <form class="form-signin" method="POST" action="{{ route('register') }}">
              @csrf


                <!-- LABEL DE NAME -->
                <div class="form-label-group">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Digite seu nome" autofocus >
                  <label for="name">Digite seu nome</label>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                </div>
                <!-- LABEL DE EMAIL -->
                <div class="form-label-group">
                  <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Digite um email válido">
                  <label for="email">Digite um email válido</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                </div>

                <!-- LABEL DE SENHA -->
                <div class="form-label-group">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" placeholder="Digite uma senha">
                  <label for="password">Digite uma senha</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                </div>

                <!-- LABEL DE CONFIRMAR SENHA -->
                <div class="form-label-group">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Digite novamente a senha">
                  <label for="password-confirm">Digite novamente a senha</label>     
                </div>
               
                <button type="submit" class="btn btn-outline-info btn-block text-white btn-login" >REGISTRAR-SE</button> 
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>    
</body>
</html>

