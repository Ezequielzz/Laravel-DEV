<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome'=>'required',
            'descricao'=>'required',
            'preco'=>'required|decimal',
        ]);

        Produto::create($request->all());

        return redirect()->route('produtos.index')
                         ->with('success', 'Produto criado com sucesso.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        return view('produtos.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        return view('produto.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'nome' => 'required',
            'descricao'=>'required',
            'preco' => 'required|decimal',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()->route('produtos.index')
                         ->with('success', 'Produto Deletado com Sucesso.');
    }

}
