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
                <div class="form-check">
                  <input class="form-check-input ml-2 my-2" type="checkbox" name="remember" data-toggle="modal" id="btn-mensagem" data-target="#exampleModalLong" data-backdrop="static" required>
                      <label class="form-check-label ml-4 text-white" for="remember" style="font-size: 15px;">
                          {{ __('Aceito os termos de uso') }}
                      </label>
                </div>     
                </div>
               
                <button class="btn btn-outline-info btn-block text-white btn-login" type="submit">REGISTRAR-SE</button> 
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>    

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Termos de uso e privacidade</h5>
        </button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fringilla mauris non sollicitudin mollis. Mauris volutpat purus at eros fringilla, sit amet semper risus fringilla. Sed eget augue ligula. Praesent lectus massa, interdum vel ante sed, lobortis dignissim tortor. Aliquam nec lobortis libero. Nunc vehicula nibh a purus ornare, a pulvinar diam aliquet. Etiam gravida, turpis sed congue euismod, libero sem semper ligula, tincidunt accumsan libero arcu vitae lectus. Sed finibus tincidunt luctus. In hac habitasse platea dictumst.
        <br>
        ed semper elementum eros sit amet posuere. Praesent porta rutrum ipsum, venenatis pretium mauris viverra eget. Mauris at porta erat. In volutpat mollis vulputate. Sed vestibulum luctus lorem. Aliquam egestas dui eget eros euismod, id facilisis dolor condimentum. Quisque ultrices facilisis sem sed lacinia. Duis volutpat, velit sit amet tincidunt sodales, augue orci fringilla sapien, nec fermentum libero lorem venenatis mauris. Mauris viverra nibh placerat ultricies efficitur. Mauris risus eros, sollicitudin eget pellentesque vitae, volutpat vitae risus. Nulla facilisi. Etiam porttitor semper turpis, sed aliquam metus condimentum sit amet. Donec porta mauris efficitur turpis interdum, ac fermentum mi faucibus. Aliquam id semper nulla, at dapibus massa. Morbi ultrices dui nec purus tristique, facilisis fermentum purus tristique.
        <br>
        Ut sit amet faucibus ex. Donec lacinia turpis id risus accumsan vulputate. Maecenas sed pulvinar mauris. Cras dictum turpis vel metus scelerisque viverra. Maecenas ut rhoncus orci. Fusce vitae luctus urna, ac pulvinar diam. Proin interdum finibus lacus, non accumsan eros malesuada ut. Pellentesque dolor sem, tristique ut lorem vel, malesuada placerat risus. Praesent venenatis magna at turpis consectetur pellentesque. In id elit eget justo ullamcorper ornare non in tortor. Nam blandit sapien nec lacus auctor, non sagittis nisi sollicitudin. Nulla porttitor elementum felis eget pharetra. Nullam quis risus iaculis, varius augue ut, auctor nibh. Ut fermentum tempus sollicitudin. Morbi non consectetur ante. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        <br>
        Etiam rutrum lacus eu diam suscipit, et imperdiet elit gravida. Proin vitae suscipit neque, id finibus lacus. Aliquam egestas vel tortor at imperdiet. Praesent ipsum mi, euismod maximus ornare eget, mollis vel magna. Integer condimentum consequat lectus sit amet rutrum. Phasellus convallis purus a metus varius gravida. Fusce nisl urna, sodales at elit sit amet, suscipit tristique lacus. In sit amet tristique dui, vitae elementum neque. Nulla facilisi. Sed eget magna diam. Nulla facilisi. Ut maximus eget ipsum eget malesuada.
        <br>
        Suspendisse sit amet ipsum metus. Morbi aliquam, massa vel egestas convallis, dolor nulla porttitor velit, sit amet cursus odio urna a turpis. Fusce molestie purus ac diam iaculis aliquam. Pellentesque sollicitudin nisl vel risus cursus, quis fermentum quam porttitor. Proin tristique euismod commodo. Sed placerat dolor velit. Etiam at fermentum urna. In non turpis risus. Cras ex risus, eleifend vitae rhoncus eget, molestie nec erat.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Aceito</button>
      </div>
    </div>
  </div>
</div>




</body>
</html>

