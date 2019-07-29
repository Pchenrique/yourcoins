@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                <a href="{{route('deposito.buscar')}}">Todos os Depositos</a>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Valor</th>
                      <th scope="col">Data de pedido</th>
                      <th scope="col">Status</th>
                      <th scope="col">Informações</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($depositos as $deposito)
                    <tr>
                      <th scope="row">{{$deposito->id}}</th>
                      <td>{{$deposito->valor}}</td>
                      <td>{{$deposito->created_at}}</td>
                      <td style="color:grey">{{$deposito->status}}</td>
                      <td><a href="{{route('deposito.edit', $deposito->id)}}">Detalhes</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>            
            </div>
        </div>
    </div>
</div>
@endsection