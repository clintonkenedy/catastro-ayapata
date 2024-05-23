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
        Schema::create('tf_documentos_adjuntos', function (Blueprint $table) {
            $table->string('id_doc', 21)->primary();
            $table->string('id_ficha', 19);
            $table->integer('codi_doc')->nullable();
            $table->string('tipo_doc', 2)->nullable();
            $table->string('nume_doc', 20)->nullable();
            $table->decimal('area_autorizada', 7, 2)->nullable();
            $table->date('fecha_doc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_documentos_adjuntos');
    }
};
