<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Saldo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth'=> 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        if($user->tipo == null || $user->tipo == "user"){
            return view('home', ['user'=>$user]);    
        }else{
            return view('home-admin',['user'=>$user]);
        }
        
    }

    public function criando(){
        $user = auth()->user();
        $saldo = new Saldo;
        $saldo->valordisponivel = 0;
        $saldo->user_id = $user->id;
        $saldo->save();

        return view('home', ['user'=>$user]);
    }
}
