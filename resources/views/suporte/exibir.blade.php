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
                              <th scope="col">Titulo</th>
                              <th scope="col">Data</th>
                              <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user->suportes as $suporte)
                            <tr>
                              <th scope="row">{{$suporte->id}}</th>
                              <td><a href="{{route('suporte.show', $suporte->id)}}">{{$suporte->titulo}}</a></td>
                              <td>{{$suporte->created_at}}</td>
                              @if($suporte->status == "Analisando")
                                <td><p style="color:grey;">{{$suporte->status}}</p></td>
                              @else
                                <td><P style="color:green;">{{$suporte->status}}</p></td>
                              @endif
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