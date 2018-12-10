<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Input;
use App\User;

class motoristaController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
    /*public function __construct()
    {
        $this->middleware ('auth');
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = User::get();

        return view('motorista.index', ['motoristas' => $todos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('motorista.criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $motorista = new User;
        $motorista->matricula = Input::get('matricula');
        $motorista->nome = Input::get('nome'); 
        $motorista->email = Input::get('email');
        $motorista->password = md5(Input::get('senha'));
        $motorista->tipo_user = "3";

        $motorista->save();

        return view('motorista.criar');
        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $matricula
     * @return \Illuminate\Http\Response
     */
    public function show($matricula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $matricula
     * @return \Illuminate\Http\Response
     */
    public function edit($matricula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $matricula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $matricula)
    {
        //
    }
}
