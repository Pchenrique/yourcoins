@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                   @if($suporte->status == "Analisando")   
                      <strong>Status:</strong> <p style="color:red;">{{$suporte->status}}</p>
                    @else
                     <strong>Status:</strong> <p style="color:green;">{{$suporte->status}}</p>
                    @endif
                    <strong>Titulo:</strong> <p>{{$suporte->titulo}}</p>
                    <strong>Descrição:</strong> <p>{{$suporte->descricao}}</p>
                    <strong>Resposta:</strong> <p>{{$suporte->resposta}}</p>
                </div>
            </div>        
        </div>
    </div>
</div>
@endsection