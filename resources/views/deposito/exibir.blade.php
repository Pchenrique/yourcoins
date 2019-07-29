@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Valor</th>
                      <th scope="col">Data de pedido</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($depositos as $deposito)
                    <tr>
                      <th scope="row">{{$deposito->id}}</th>
                      <td>{{$deposito->valor}}</td>
                      <td>{{$deposito->created_at}}</td>
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