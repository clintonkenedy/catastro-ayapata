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
        Schema::create('tf_fichas_economicas', function (Blueprint $table) {
            $table->char('id_ficha', 19)->primary();
            $table->string('nomb_comercial', 100)->nullable();
            $table->decimal('pred_area_autor', 7, 2)->nullable();
            $table->decimal('viap_area_autor', 7, 2)->nullable();
            $table->decimal('viap_area_verif', 7, 2)->nullable();
            $table->decimal('bc_area_autor', 7, 2)->nullable();
            $table->decimal('bc_area_verif', 7, 2)->nullable();
            $table->char('nume_expediente', 10)->nullable();
            $table->char('nume_licencia', 10)->nullable();
            $table->date('fecha_expedicion')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->date('inic_actividad')->nullable();
            $table->char('cond_declarante', 2)->nullable();
            $table->char('esta_llenado', 1)->nullable();
            $table->char('mantenimiento', 2)->nullable();
            $table->char('docu_presentado', 2)->nullable();
            $table->decimal('pred_area_verif', 7, 2)->nullable();
            $table->string('observaciones', 500)->nullable();
            $table->char('nume_ficha', 7)->nullable();
            
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
        Schema::dropIfExists('tf_fichas_economicas');
    }
};
