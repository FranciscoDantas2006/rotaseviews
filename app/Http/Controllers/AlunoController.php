<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return 'Lista de Alunos (index)';
    }

    public function create()
    {
        return 'Formulario de cadaastro de Aluno (C)';
    }

    public function store(Request $request)
    {
        $nomeAluno = $request->input('nome');
        return "Aluno Cadastrado: $nomeAluno (S)";
    }
}
