@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if($deposito->status == "Analisando")   
                      <strong>Status:</strong> <p style="color:grey;">{{$deposito->status}}</p>
                    @elseif($deposito->status == "Confirmado")
                     <strong>Status:</strong> <p style="color:green;">{{$deposito->status}}</p>
                    @else
                    <strong>Status:</strong> <p style="color:red;">{{$deposito->status}}</p>
                    @endif

                    <strong>Valor:</strong> <p>{{$deposito->valor}}</p>
                    <strong>Data de Pedido:</strong> <p>{{$deposito->created_at}}</p>
                    <strong>Data de Confirmação:</strong> <p>{{$deposito->updated_at}}</p>
                    <strong>Nome Usuario: </strong><p>{{$usuario->name}}</p>
                    <strong>Email: </strong><p>{{$usuario->email}}</p>
                    <strong>Identificado do Usuario:</strong> <p>{{$deposito->user_id}}</p>

                    @if($deposito->status == "Analisando")

                    <form method="POST" action="{{route('deposito.update', $deposito->id)}}">
                        @csrf
                        @method('PUT')
                        <strong></strong><select name="status">
                            <option value="Confirmado" selected>Confirmado</option> 
                            <option value="Rejeitado">Rejeitado</option>
                        </select>
                        <button type="submit" name="confirma">Confirma Deposito</button>
                    </form>

                    @elseif($deposito->status == "Confirmado")
                        <strong>Status Final:</strong> <p>{{$deposito->status}}</p>
                        <form method="POST" action="{{route('saldo.validar', ['valor' => $deposito->valor, 'id' => $deposito->user_id])}}">
                            @csrf
                            <button type="submit" name="confirma">Finalizar Deposito</button>
                        </form>
                    @endif
                </div>
            </div>        
        </div>
    </div>
</div>
@endsection