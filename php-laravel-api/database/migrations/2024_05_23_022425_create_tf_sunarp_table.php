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
        Schema::create('tf_sunarp', function (Blueprint $table) {
            $table->string('id_ficha', 19);
            $table->string('tipo_partida', 2)->nullable();
            $table->string('nume_partida', 18)->nullable();
            $table->string('fojas', 18)->nullable();
            $table->string('asiento', 18)->nullable();
            $table->date('fech_inscripcion')->nullable();
            $table->string('codi_decla_fabrica', 2)->nullable();
            $table->string('asie_fabrica', 18)->nullable();
            $table->date('fecha_fabrica')->nullable();
            $table->primary('id_ficha');
            $table->foreign('id_ficha')->references('id_ficha')->on('tf_fichas')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_sunarp');
    }
};
