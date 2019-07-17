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
                                <input id="valor" name="valor" type="number" class="form-control">
                            </div>
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
                      <th scope="col">Data</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($user->depositos as $deposito)
                    <tr>
                      <th scope="row">{{$deposito->id}}</th>
                      <td>{{$deposito->valor}}</td>
                      <td>{{$deposito->created_at}}</td>
                      <td>{{$deposito->status}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>            
            </div>
        </div>
    </div>
</div>
@endsection