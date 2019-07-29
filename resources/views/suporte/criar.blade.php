@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                  <a href="{{route('suporte.index')}}">Historico de Suporte</a>
                    <form method="POST" action="{{route('suporte.store')}}" enctype="multipart/form-data">
                        @csrf

		                    <div class="form-group row">
		                        <label name="nome" class="col-md-4 col-form-label text-md-right">Nome</label>
		                            <input id="nome" name="nome" type="text" class="form-control" value="{{$user->name}}">
		                    </div>
                        <div class="form-group row">
                            <label name="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                <input id="email" name="email" type="text" class="form-control" value="{{$user->email}}">
                        </div>
                        <div class="form-group row">
                            <label name="titulo" class="col-md-4 col-form-label text-md-right">Titulo</label>
                                <input id="titulo" name="titulo" type="text" class="form-control">
                        </div>
                        <div class="form-group row">
                            <label name="descricao" class="col-md-4 col-form-label text-md-right">descrição</label>
                                <input id="descricao" name="descricao" type="text" class="form-control">
                        </div>

    		                <div class="form-group row mb-0">
    		                    <div class="col-md-8 offset-md-4">
    		                        <button type="submit" class="btn btn-primary">Enviar</button>
    		                    </div>
    		                </div>
                    </form>
                </div>        
            </div>
        </div>
    </div>
</div>
@endsection