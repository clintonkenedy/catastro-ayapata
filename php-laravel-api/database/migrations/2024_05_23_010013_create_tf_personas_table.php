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
        Schema::create('tf_personas', function (Blueprint $table) {
            $table->char('id_persona', 21)->primary();
            $table->char('nume_doc', 17)->nullable();
            $table->char('tipo_doc', 2)->nullable();
            $table->char('tipo_persona', 1)->nullable();
            $table->string('nombres', 150)->nullable();
            $table->string('ape_paterno', 50)->nullable();
            $table->string('ape_materno', 50)->nullable();
            $table->char('tipo_persona_juridica', 2)->nullable();
            $table->char('tipo_funcion', 1)->nullable();
            $table->string('razon_social', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_personas');
    }
};
