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
        if (Livro::create($request->all())){
            return response()->json(['message' => 'Livro criado com sucesso'], 201);
        }
        return response()->json(['message' => 'Não foi possível cadastrar o livro.'], 404);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Livro::all();
    }


    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $livro = Livro::find($id);
        if ($livro) {
            return $livro;
        }
        return response()->json(['message' => 'Livro não encontrado.'], 404);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $livro = Livro::find($id);
        if ($livro) {
            $livro->update($request->all());
            return $livro;
        }
        return response()->json(['message' => 'Erro ao atualizar livro.'], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Livro::destroy($id)) {
            return response()->json(['message' => 'Livro deletado com sucesso'], 201);
        }

        return response()->json(['message' => 'Erro ao deletar livro.'], 404);
    }
}
