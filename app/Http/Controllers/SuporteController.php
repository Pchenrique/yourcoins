<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suporte;

class SuporteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Retorna todas as reclamações de um usuário em especifico.
    public function index()
    {
        $user = auth()->user();
        return view('suporte.exibir', ['user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();
        return view('suporte.criar', ['user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $suporte = new Suporte;
        $suporte->nome = $request->input('nome');
        $suporte->email = $request->input('email');
        $suporte->titulo = $request->input('titulo');
        $suporte->descricao = $request->input('descricao');
        $suporte->resposta = "A equipe de suporte está analisando o chamado";
        $suporte->status = "Analisando";
        $suporte->user_id = auth()->user()->id;

        $suporte->save();

        return redirect('suporte/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suporte = Suporte::find($id);
        return view('suporte.detalhe', ['suporte'=>$suporte]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
