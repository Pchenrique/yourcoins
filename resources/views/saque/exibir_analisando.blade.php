@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Saques em Analise') }}</div>
                <a href="{{route('deposito.buscar')}}">Todos os Saques</a>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Valor</th>
                      <th scope="col">Data do Pedido</th>
                      <th scope="col">Status</th>
                      <th scope="col">Informações</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($saques as $saque)
                    <tr>
                      <th scope="row">{{$saque->id}}</th>
                      <td>{{$saque->valor}}</td>
                      <td>{{$saque->created_at}}</td>
                      <td style="color:grey">{{$saque->status}}</td>
                      <td><a href="{{route('saque.edit', $saque->id)}}">Detalhes</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>            
            </div>
        </div>
    </div>
</div>
@endsection