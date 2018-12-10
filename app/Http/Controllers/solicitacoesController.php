<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Input;
use App\Solicitacao;
use App\User;
use App\Veiculo;

class solicitacoesController extends Controller
{
     public function __construct(){
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Solicitacao::get();
        $moto = User::where('tipo_user',3)->get();
        $veic = Veiculo::get();
        return view('solicitacoes.index', ['solicitacoes' => $todos, 'motoristas' => $moto, 'veiculos' => $veic]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('solicitacoes.criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $solicitacoes = new Solicitacao;
        $solicitacoes->data_inicio = Input::get('data_inicio');
        $solicitacoes->data_fim = Input::get('data_fim'); 
        $solicitacoes->local = Input::get('local');
        $solicitacoes->qtdd_passageiros = Input::get('qtdd_passageiros');
        $solicitacoes->user_requerente = 1;
        $solicitacoes->veiculo = null;
        $solicitacoes->motorista = null;

        $solicitacoes->save();

        return view('solicitacoes.criar');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todos = Solicitacao::get();
        $moto = User::where('tipo_user',3)->get();
        $veic = Veiculo::get();
        return view('solicitacoes.mostrar', ['solicitacoes' => $todos, 'motoristas' => $moto, 'veiculos' => $veic]);
    }

    public function visu()
    {
        $todos = Solicitacao::get();
        $moto = User::where('tipo_user',3)->get();
        $veic = Veiculo::get();
        return view('solicitacoes.visualizar', ['solicitacoes' => $todos, 'motoristas' => $moto, 'veiculos' => $veic]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit($id)
    {
        $solicitacoes = Solicitacao::where('id', $id)->get();
        $moto = User::where('tipo_user',3)->get();
        $veic = Veiculo::get();
        return view('solicitacoes.editar', ['solicitacoes' => $solicitacoes, 'motoristas' => $moto, 'veiculos' => $veic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function update(Request $request)
    {

        Solicitacao::where('id', $request->id)->update([
            'veiculo' => $request->veiculo, 
            'motorista' => $request->motorista, 
            'situacao' => $request->situacao
        ]);

        $todos = Solicitacao::get();
        $moto = User::where('tipo_user',3)->get();
        $veic = Veiculo::get();
        return view('solicitacoes.index', ['solicitacoes' => $todos, 'motoristas' => $moto, 'veiculos' => $veic]);
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