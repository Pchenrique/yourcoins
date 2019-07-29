@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('saque.store')}}" enctype="multipart/form-data">
                        @csrf

		                    <div class="form-group row">
		                        <label name="valor" class="col-md-4 col-form-label text-md-right">Valor</label>
		                            <input id="valor" name="valor" type="number" class="form-control">
		                    </div>
		                        <div class="form-group row">
		                            <label name="carteira" class="col-md-4 col-form-label text-md-right">carteira</label>
		                                <input id="carteira" name="carteira" type="name" class="form-control">
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
                      <th scope="col">Ordem</th>
                      <th scope="col">Valor</th>
                      <th scope="col">Carteira</th>
                      <th scope="col">Data</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($user->saques as $saque)
                    <tr>
                      <th scope="row">{{$saque->id}}</th>
                      <td>{{$saque->valor}}</td>
                      <td>{{$saque->carteira}}</td>
                      <td>{{$saque->created_at}}</td>
                      @if($saque->status == 'Analisando')
                        <td style="color:grey">{{$saque->status}}</td>
                      @elseif($saque->status == 'Confirmado')
                        <td style="color:green">{{$saque->status}}</td>
                      @else
                        <td style="color:red">{{$saque->status}}</td>
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