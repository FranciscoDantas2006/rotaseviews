<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    // Exercício 1
    public function index() {
        return 'lista de cursos';
    }

    // Exercício 2
    public function create() {
        return view('cursos.create');
    }

    // Exercício 3 (A LISTA QUE ESTAVA EM FALTA)
    public function listagem() {
        $cursos = ['ADS', 'Zootecnia', 'Direito'];
        return view('cursos.listagem', compact('cursos'));
    }

    // Exercício 4
    public function show($id) {
        return "Curso Selecionado: ID $id";
    }

    // Exercício 5
    public function store(Request $request) {
        $nomeCurso = $request->input('nome');
        return "Curso Cadastrado: $nomeCurso";
    }
}
