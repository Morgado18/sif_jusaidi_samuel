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
        Schema::create('empreendedores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('contactoempreendedor');
            $table->text('tipo')->nullable();
            $table->text('hestoricoDeEmpreendedorismo');
/*             $table->text('projectoActual');

 */
            $table->string('password');

            $table->string('email')->unique();
            $table->timestamps();
            $table->foreignId('id_User')->constrained()->onDelete("cascade")->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empreendedores');
    }
};
