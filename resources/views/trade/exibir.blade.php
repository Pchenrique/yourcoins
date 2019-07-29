@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">Ordem</th>
                              <th scope="col">Valor investido</th>
                              <th scope="col">valor Final</th>
                              <th scope="col">Lucro</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user->trades as $trade)
                            <tr>
                              <th scope="row">{{$trade->id}}</th>
                              <td>{{$trade->valorinicial}}</td>
                              <td>{{$trade->valorfinal}}</td>
                              <td>{{$trade->lucro}}</td>
                              <td>{{$trade->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>    
 
                </div>
            </div>        
        </div>
    </div>
</div>
@endsection