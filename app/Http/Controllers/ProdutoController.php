<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produto = Produto::orderBy('nome')->get();
        return view('produto.index',['produto'=>$produto]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'nome'       => 'required|min:5',
            'quantidade' => 'required|integer',
            'valor'      => 'required'
        ]);

        $produto = new Produto;
        $produto-> nome = $request->nome;
        $produto-> quantidade = $request->quantidade;
        $produto-> valor = $request->valor;
        $produto-> save();

        return redirect()->action([ProdutoController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produto = Produto::find($id);
        return view('produto.show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produto = Produto::find($id);
        return view('produto.edit', ['produto' => $produto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nome'       => 'required|min:5',
            'quantidade' => 'required|integer',
            'valor'      => 'required'
        ]);

        $produto = new Produto;
        $produto-> nome = $request->nome;
        $produto-> quantidade = $request->quantidade;
        $produto-> valor = $request->valor;
        $produto-> save();
        
        return redirect()->action([ProdutoController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produto = Produto::find($id);
        $produto->delete();

        return redirect()->action([ProdutoController::class, 'index']);
    }
}
