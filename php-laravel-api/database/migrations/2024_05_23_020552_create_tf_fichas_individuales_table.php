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
        Schema::create('tf_fichas_individuales', function (Blueprint $table) {
            $table->char('id_ficha', 19);
            $table->char('codi_uso', 6);
            $table->char('cont_en', 2)->nullable();
            $table->char('clasificacion', 4)->nullable();
            $table->decimal('area_titulo', 7, 2)->nullable();
            $table->decimal('area_declarada', 7, 2)->nullable();
            $table->decimal('area_verificada', 7, 2)->nullable();
            $table->decimal('porc_bc_terr_legal', 7, 2)->nullable();
            $table->decimal('porc_bc_terr_fisc', 7, 2)->nullable();
            $table->decimal('porc_bc_const_legal', 7, 2)->nullable();
            $table->decimal('porc_bc_const_fisc', 7, 2)->nullable();
            $table->char('evaluacion', 2)->nullable();
            $table->decimal('en_colindante', 7, 2)->nullable();
            $table->decimal('en_jardin_aislamiento', 7, 2)->nullable();
            $table->decimal('en_area_publica', 7, 2)->nullable();
            $table->decimal('en_area_intangible', 7, 2)->nullable();
            $table->char('cond_declarante', 2)->nullable();
            $table->char('esta_llenado', 1)->nullable();
            $table->integer('nume_habitantes')->nullable();
            $table->integer('nume_familias')->nullable();
            $table->char('mantenimiento', 2)->nullable();
            $table->string('observaciones', 500)->nullable();
            $table->char('nume_ficha', 7)->nullable();
            $table->primary(['id_ficha', 'codi_uso']);
            $table->foreign('id_ficha')
                ->references('id_ficha')
                ->on('tf_fichas')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
            $table->foreign('codi_uso')
                ->references('codi_uso')
                ->on('tf_usos')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_fichas_individuales');
    }
};
