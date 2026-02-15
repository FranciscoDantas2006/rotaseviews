<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id(); // Cria o ID automático
            $table->string('nome'); // Coluna para o nome do cliente
            $table->string('email')->unique(); // Coluna para o email (não pode repetir)
            $table->timestamps(); // Cria as colunas created_at e updated_at
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
