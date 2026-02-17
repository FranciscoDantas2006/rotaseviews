<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
});

// Atividades 1, 2 e 3 (Texto)
Route::get('/ola', function () { return 'Olá, Laravel!'; });
Route::get('/curso/ads', function () { return 'Curso de Análise e Desenvolvimento de Sistemas'; });
Route::get('/curso/web', function () { return 'Disciplina Programação Web I'; });



// Atividades 4, 5 e 6 (Views)
Route::view('/equipe', 'equipe');
Route::view('/contato', 'contato');
Route::view('/institucional/missao', 'missao');



// Atividades 7, 8, 9 e 10 (Controller)
Route::get('/empresa', [PaginaController::class, 'empresa']);
Route::get('/servicos', [PaginaController::class, 'servicos']);
Route::get('/portfolio', [PaginaController::class, 'portfolio']);
Route::get('/blog', [PaginaController::class, 'blog']);



// Atividade 11 (Parâmetro direto na rota)
Route::get('/usuario/{nome}', function ($nome) {
    return "Usuário: " . $nome;

});


// Atividade 12 (Parâmetro via Controller)
Route::get('/produto/{id}', [PaginaController::class, 'produto']);


// Atividades 13, 14 e 15 (CursoController)
Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/novo', [CursoController::class, 'create']);
Route::get('/cursos/lista', [CursoController::class, 'listagem']); // Adicionado conforme PDF Ex 3
Route::get('/cursos/{id}', [CursoController::class, 'show']); // Ajustado para aceitar ID conforme PDF Ex 4
Route::post('/cursos', [CursoController::class, 'store']);

//Continuação Atividade de Controllers
Route::resource('alunos', AlunoController::class); // Adicionado conforme PDF Ex 6
Route::get('/produtos/create', [ProdutoController::class, 'create']);
Route::post('/produtos', [ProdutoController::class, 'store']);
Route::get('/disciplinas', [DisciplinaController::class, 'index']);
Route::post('/disciplinas', [DisciplinaController::class, 'store']);
Route::get('/disciplinas/{id}', [DisciplinaController::class, 'show']);
