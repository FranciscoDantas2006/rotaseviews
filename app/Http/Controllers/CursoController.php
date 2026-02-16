<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso; // IMPORTANTE: Adicione esta linha!

class CursoController extends Controller
{
    // Agora busca todos os cursos do banco
    public function index() {
        $cursos = Curso::all();
        return view('cursos.index', ['cursos' => $cursos]);
    }

    public function create() {
        return view('cursos.create');
    }

    // Agora SALVA de verdade no banco de dados
    public function store(Request $request) {
        $curso = new Curso;
        $curso->nome = $request->nome;
        // Se tiver carga horária no formulário, adicione aqui
        $curso->save();

        return redirect('/cursos'); // Redireciona para a lista atualizada
    }

    public function show() {
        $nomeCurso = "Análise e Desenvolvimento de Sistemas";
        return view('cursos.show', ['curso' => $nomeCurso]);
    }
}
