<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    // Mostra o formulário de cadastro (index.blade.php)
    public function index() {
        return view('disciplinas.index');
    }

    // Recebe os dados do formulário
    public function store(Request $request) {
        $nome = $request->input('name'); // O PDF pede o nome do input como 'name'
        return "Disciplina cadastrada: " . $nome;
    }

    // Mostra os detalhes (show.blade.php)
    public function show($id) {
        // Como o PDF pede, passamos um ID e um Nome fixo para testar
        return view('disciplinas.show', ['id' => $id, 'nome' => 'Programação Web']);
    }
}
