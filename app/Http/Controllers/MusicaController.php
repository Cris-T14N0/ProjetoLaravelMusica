<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Musica;

class MusicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $musicas = Musica::all();
        return view ('musicas.index',compact('musicas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('musicas.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validar
        $request->validate(['musica' => 'required|max:255',]);
        $request->validate(['autor' => 'required|max:255',]);
        $request->validate(['duracao' => 'required|max:255',]);

        $dados = $request -> all();

        //Criar Instância
        $musica = new Musica();

        //Preparar Valores
        $musica->musica = $dados['musica'];
        $musica->autor = $dados['musica'];
        $musica->duracao = $dados['musica'];

        //Gravar na BD
        $musica->save();

        //Reencaminhar
        return redirect()->route('musicas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $musica = Musica::findOrFail($id);
        return view('musicas.edit',compact('musica'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Validar
        $request->validate(['musica' => 'required|max:255',]);
        $request->validate(['autor' => 'required|max:255',]);
        $request->validate(['duracao' => 'required|max:255',]);

        $dados = $request -> all();

        Musica::where('id',$id)->update(['musica' => $dados['musica'],]);

        //Reencaminhar
        return redirect()->route('musicas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Localizar e eliminar
        Musica::where('id',$id)->delete();

        //Reencaminhar
        return redirect()->route('musicas.index');
    }
}
