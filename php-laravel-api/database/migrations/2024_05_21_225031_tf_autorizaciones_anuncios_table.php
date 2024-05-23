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
        Schema::create('tf_autorizaciones_anuncios', function (Blueprint $table) {
            $table->string('id_anuncio', 25)->primary();
            $table->string('id_ficha', 19);
            $table->string('codi_anuncio', 3)->nullable();
            $table->integer('codi_autoriza')->nullable();
            $table->integer('nume_lados')->nullable();
            $table->decimal('area_autorizada', 7, 2)->nullable();
            $table->decimal('area_verificada', 7, 2)->nullable();
            $table->string('nume_expediente', 10)->nullable();
            $table->string('nume_licencia', 10)->nullable();
            $table->date('fecha_expedicion')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
