<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    private $produto;
    public function __construct(Produto $produto)
    {
       $this->produto = $produto;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = $this->produto->all();
        return response()->json($produtos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->produto->create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        return response()->json($produto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        $produto->update($request->all());
        return response()->json($produto);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produto = $this->produto->find($id);
        $produto->delete();
        return response()->json('Produto removido com sucesso!');
    }
}
