<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // Mostra o formulário
    public function create() {
        return view('produtos.create');
    }

    // Recebe o que você digitou e mostra na tela
    public function store(Request $request) {
        $nome = $request->input('nome');
        return "Produto: " . $nome;
    }
}
