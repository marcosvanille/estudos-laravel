<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelo;

// chamando a model na controller para poder usar os dados no banco


//Usei o seguinte comando no terminal para criar essa Controller e todos os metodos para contruir um crud : php artisan make:controller ModeloController -r de resource
class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //Exibir
    {
        $modelos123 = Modelo::all();
        return view('modelos.index', compact('modelos123'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //Criar
    {
        return view('modelos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Modelo::create($request->all());

        return redirect()->route('modelos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //Show para visualizar um unico modelo
    {
        $modelo = Modelo::find($id);
        return view('modelos.show')->with(['modelo' => $modelo]);
//        essa parte o with ,a variavel $modelo que pega do banco torna 'modelo' um array atraves do => para ser passado para view
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //Editar
    {
        $modelo = Modelo::find($id);
        return view('modelos.edit')->with(['modelo' => $modelo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) // update para atualizar
    {
        $modelo = Modelo::find($id)->update($request->all());
        return redirect()->route('modelos.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //destroy para deletar
    {
        $modelo = Modelo::find($id)->delete();
        return redirect()->route('modelos.index');
    }
}
