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
        Schema::create('investidores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->text('tipo')->nullable();
            $table->text('contactoinvestidor');
            $table->text('categoria');
            $table->text('historicoDeInvestimento');
            $table->string('password');
            $table->timestamps('');
            $table->foreignId('id_User')->constrained()->onDelete("cascade")->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investidores');
    }
};
