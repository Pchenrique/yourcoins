<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('deposito', 'DepositoController');
Route::resource('saque', 'SaqueController');
Route::resource('suporte', 'SuporteController');
Route::resource('trade', 'TradeController');
Route::resource('saldo', 'SaldoController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('home/criando', 'HomeController@criando')->name('home.criando');

Route::post('/saldo/validar/{valor}/{id}', 'SaldoController@validar')->name('saldo.validar');
Route::get('/deposito/buscar', 'DepositoController@buscar')->name('deposito.buscar');


