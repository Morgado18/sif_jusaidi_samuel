<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mensagens', function (Blueprint $table) {
            $table->id();
            $table->String('mensagem');
            $table->foreignId('id_empreendedor')->constrained()->onDelete("cascade")->references('id')->on('empreendedores');
            $table->foreignId('id_investidor')->constrained()->onDelete("cascade")->references('id')->on('investidores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensagens');
    }
};
