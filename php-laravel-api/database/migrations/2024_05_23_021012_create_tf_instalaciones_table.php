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
        Schema::create('tf_instalaciones', function (Blueprint $table) {
            $table->char('id_instalacion', 24)->primary();
            $table->char('id_ficha', 19);
            $table->char('codi_instalacion', 2);
            $table->integer('codi_obra');
            $table->date('fecha')->nullable();
            $table->char('mep', 2)->nullable();
            $table->char('ecs', 2)->nullable();
            $table->char('ecc', 2)->nullable();
            $table->decimal('dime_largo', 7, 2)->nullable();
            $table->decimal('dime_ancho', 7, 2)->nullable();
            $table->decimal('dime_alto', 7, 2)->nullable();
            $table->decimal('prod_total', 7, 2)->nullable();
            $table->char('uni_med', 2)->nullable();
            $table->char('uca', 2)->nullable();

            $table->foreign('codi_instalacion')
                ->references('codi_instalacion')
                ->on('tf_codigos_instalaciones')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('id_ficha')
                ->references('id_ficha')
                ->on('tf_fichas')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_instalaciones');
    }
};
