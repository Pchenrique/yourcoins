@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if($saque->status == "Analisando")   
                      <strong>Status:</strong> <p style="color:grey;">{{$saque->status}}</p>
                    @elseif($saque->status == "Confirmado")
                     <strong>Status:</strong> <p style="color:green;">{{$saque->status}}</p>
                    @else
                    <strong>Status:</strong> <p style="color:red;">{{$saque->status}}</p>
                    @endif

                    <strong>Valor:</strong> <p>{{$saque->valor}}</p>
                    <strong>Data de Pedido:</strong> <p>{{$saque->created_at}}</p>
                    <strong>Data de Confirmação:</strong> <p>{{$saque->updated_at}}</p>
                    <strong>Nome Usuario: </strong><p>{{$usuario->name}}</p>
                    <strong>Email: </strong><p>{{$usuario->email}}</p>
                    <strong>Identificado do Usuario:</strong> <p>{{$saque->user_id}}</p>

                    @if($saque->status == "Analisando")

                    <form method="POST" action="{{route('saque.update', $saque->id)}}">
                        @csrf
                        @method('PUT')
                        <strong></strong><select name="status">
                            <option value="Confirmado" selected>Confirmado</option> 
                            <option value="Rejeitado">Rejeitado</option>
                        </select>
                        <button type="submit" name="confirma">Confirma Saque</button>
                    </form>

                    @elseif($saque->status == "Confirmado")
                        <strong>Status Final:</strong> <p>{{$saque->status}}</p>
                        <form method="POST" action="{{route('saldo.validar', ['valor' => $deposito->valor, 'id' => $deposito->user_id])}}">
                            @csrf
                            <button type="submit" name="confirma">Finalizar Saque</button>
                        </form>
                    @endif
                </div>
            </div>        
        </div>
    </div>
</div>
@endsection