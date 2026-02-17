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
        $nome = $request->input('nome');
        return "Disciplina '{$nome}' cadastrada com sucesso!";
    }

    // Mostra os detalhes (show.blade.php)
    public function show($id) {
        return view('disciplinas.show', ['id' => $id, 'nome' => 'Programação Web']);
    }
}
