<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

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
Route::get('/usuario/{Francisco}', function ($nome) {
    return "Usuário: " . $nome;
});

// Atividade 12 (Parâmetro via Controller)
Route::get('/produto/{id}', [PaginaController::class, 'produto']);
