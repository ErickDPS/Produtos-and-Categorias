<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoria = Categoria::orderBy('nome')->get();
        return view('categoria.index',['categoria'=>$categoria]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'nome'       => 'required|min:5',
        ]);

        $categoria = new Categoria;
        $categoria-> nome = $request->nome;
        $categoria-> save();

        return redirect()->action([CategoriaController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = Categoria::find($id);
        return view('categoria.show', ['categoria' => $categoria]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoria = Categoria::find($id);
        return view('categoria.edit', ['categoria' => $categoria]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nome'       => 'required|min:3',
        ]);

        $categoria = Categoria::find($id);
        $categoria-> nome = $request->nome;
        $categoria-> save();
        
        return redirect()->action([CategoriaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();

        return redirect()->action([CategoriaController::class, 'index']);
    }
}
