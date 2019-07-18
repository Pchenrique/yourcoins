<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login - YourCoins</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style_login.css')}}">
</head>
<body>
  <nav class="navbar navbar-expand-lg static-top navbar-dark">
       

  </nav>
  <div class="container">

      <div class="row justify-content-center">

          <div class="col-md-4">
              
          </div>
      </div>
      <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-8 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
                <center>
                 <a class="navbar-brand" href="/yourcoins/public/">
            <img  src="img/logo.png" width="235" height="76" class="d-inline-block align-top" alt="">
                 </a></center>
              <h5 class="card-title text-center text-white my-3">{{ __('Login') }}</h5>
              <form class="form-signin" method="POST" action="{{ route('login') }}">
              @csrf
                <div class="form-label-group">
                  <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror auto-" name="email" placeholder="Endereço de Email" required autocomplete="email" autofocus>
                  <label for="inputEmail">Endereço de Email</label>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror    
                </div>
                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control  @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                  <label for="inputPassword">Senha</label>
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-check">

                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      <label class="form-check-label text-white" for="remember">
                          {{ __('Matenha-me conectado!') }}
                      </label>
                      
                </div>

                <button class="btn btn-outline-info btn-block text-white btn-login" type="submit">LOGIN</button>
                 @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" type="text" class="text-white float-right"><i class="fab fa-facebook-f mr-2"></i>Esqueceu a senha?</a>                    
                      @endif
                <hr class="my-4">
                <a class="btn btn-lg btn-cadastro btn-block" href="{{ route('register') }} "type="submit"><i class="fab fa-google mr-2"></i> CADASTRE-SE</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>    
</body>
</html>

