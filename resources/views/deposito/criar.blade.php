@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('deposito.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label name="valor" class="col-md-4 col-form-label text-md-right">Valor</label>
                                <input id="valor" class="form-control" type="number" maxlength="10" pattern="[0-9]+([,\.][0-9]+{10})" min="0" name="valor">
                        </div>
                        
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">Confirmar</button>
                        </div>
                    </div>
                    </form>
                </div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Valor</th>
                      <th scope="col">Data do Pedido</th>
                      <th scope="col">Data da Confirmação</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($user->depositos as $deposito)
                    <tr>
                      <th scope="row">{{$deposito->id}}</th>
                      <td>{{$deposito->valor}}</td>
                      <td>{{$deposito->created_at}}</td>
                      <td>{{$deposito->updated_at}}</td>
                      @if($deposito->status == 'Analisando')
                        <td style="color:grey">{{$deposito->status}}</td>
                      @elseif($deposito->status == 'Confirmado')
                        <td style="color:green">{{$deposito->status}}</td>
                      @else
                        <td style="color:red">{{$deposito->status}}</td>
                      @endif
                    </tr>
                    @endforeach
                  </tbody>
                </table>            
            </div>
        </div>
    </div>
</div>
@endsection
