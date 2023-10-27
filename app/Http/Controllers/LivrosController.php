<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivrosController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $livro = new Livro;
        $livro->titulo = $request->input('titulo');
        $livro->autor = $request->input('autor');
        $livro->classificacao = $request->input('classificacao');
        $livro->resenha = $request->input('resenha');
        $livro->save();

        return response()->json(['message' => 'Livro criado com sucesso'], 201);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }


    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
