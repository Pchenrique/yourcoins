<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\saque;

class SaqueController extends Controller
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
    public function index()
    {
        $user = auth()->user();
        if($user->tipo == "admin"){
            $saques = Saque::all()->where('status', '=', 'Analisando');
            return view('saque.exibir_analisando', ['saques'=>$saques]);
        }else{
            echo "Você não é admin";
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
        return view('saque.criar', ['user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saque = new Saque;
        $saque->valor = $request->input('valor');
        $saque->carteira= $request->input('carteira');
        $saque->status = "Analisando";
        $saque->user_id = auth()->user()->id;

        $saque->save();

        return redirect('saque/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            $saque = Saque::find($id);
            $usuario = User::find($saque->user_id);
            return view('saque.edit', ['saque'=>$saque, 'usuario'=>$usuario]);
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
