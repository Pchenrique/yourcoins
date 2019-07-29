<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deposito;
use App\User;

class DepositoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        if($user->tipo == "admin"){
            $depositos = Deposito::all()->where('status', '=', 'Analisando');
            return view('deposito.exibir_analisando', ['depositos'=>$depositos]);
        }else{
            echo "foi mal você não é admin";
        }

    }
    public function buscar(){
        $user = auth()->user();
        if($user->tipo == "admin"){
            $depositos = Deposito::all();
            return view('deposito.exibir', ['depositos'=>$depositos]);
        }else{
            echo "foi mal você não é admin";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$user = auth()->user();
        return view('deposito.criar', ['user'=>$user]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$deposito = new Deposito;
    	$deposito->valor = $request->input('valor');
        $deposito->status = "Analisando";
        $deposito->user_id = auth()->user()->id;
        $deposito->updated_at = null;

        $deposito->save();
        return redirect('deposito/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = auth()->user();
        if($user->tipo == "admin"){
            $deposito = Deposito::find($id);
            $usuario = User::find($deposito->user_id);
            return view('deposito.edit', ['deposito'=>$deposito, 'usuario'=>$usuario]);
        }else{
            echo "você não é admin";
        }
      	
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = auth()->user();
        if($user->tipo == "admin"){
            $deposito = Deposito::find($id);
            $usuario = User::find($deposito->user_id);
            $deposito->status = $request->input('status');
            $deposito->save();

            return view('deposito.edit', ['deposito'=>$deposito, 'usuario'=>$usuario]);

        }else{
            echo "você não é admin";
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
