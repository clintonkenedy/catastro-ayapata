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
        Schema::create('tf_usuarios', function (Blueprint $table) {
            $table->string('id_usuario', 9)->primary();
            $table->integer('codi_usuario');
            $table->string('usuario', 50);
            $table->string('clave', 50);
            $table->string('nombres', 50);
            $table->string('ape_paterno', 50);
            $table->string('ape_materno', 50);
            $table->string('email', 50)->nullable();
            $table->date('fecha_creacion')->nullable();
            $table->date('fecha_cese')->nullable();
            $table->char('tipo_usuario', 1)->nullable();
            $table->char('estado', 1)->nullable();
            $table->string('pregunta', 100)->nullable();
            $table->string('respuesta', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_usuarios');
    }
};
