<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Input;
use App\User;

class tecnicoController extends Controller
{

    /*public function __construct()
    {
        $this->middleware ('auth');
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
    public function index()
    {
        $todos = User::get();
        return view('tecnico.index', ['tecnicos' => $todos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tecnico.criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $tecnico = new User;
        $tecnico->matricula = Input::get('matricula');
        $tecnico->nome = Input::get('nome'); 
        $tecnico->email = Input::get('email');
        $tecnico->password = md5(Input::get('senha'));
        $tecnico->tipo_user = "1";

        $tecnico->save();

        return view('tecnico.criar');
        
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
