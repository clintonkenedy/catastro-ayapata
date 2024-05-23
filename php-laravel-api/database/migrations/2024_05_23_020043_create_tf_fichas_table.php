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
        Schema::create('tf_fichas', function (Blueprint $table) {
            $table->char('id_ficha', 19)->primary();
            $table->char('tipo_ficha', 2)->nullable();
            $table->char('nume_ficha', 7)->nullable();
            $table->char('id_lote', 14)->nullable();
            $table->char('dc', 1)->nullable();
            $table->char('nume_ficha_lote', 9)->nullable();
            $table->string('declarante', 150)->nullable();
            $table->date('fecha_declarante')->nullable();
            $table->char('supervisor', 21)->nullable();
            $table->date('fecha_supervision')->nullable();
            $table->char('tecnico', 21)->nullable();
            $table->date('fecha_levantamiento')->nullable();
            $table->char('verificador', 21)->nullable();
            $table->date('fecha_verificacion')->nullable();
            $table->char('nume_registro', 10)->nullable();
            $table->char('id_uni_cat', 23)->nullable();
            $table->char('id_usuario', 9)->nullable();
            $table->timestamp('fecha_grabado')->nullable();
            $table->tinyInteger('activo')->nullable();

            $table->foreign('id_usuario')
                ->references('id_usuario')
                ->on('tf_usuarios')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('id_uni_cat')
                ->references('id_uni_cat')
                ->on('tf_uni_cat')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_fichas');
    }
};
