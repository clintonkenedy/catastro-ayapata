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
        Schema::create('tf_fichas_cotitularidades', function (Blueprint $table) {
            $table->char('id_ficha', 19)->primary();
            $table->char('cond_declarante', 2)->nullable();
            $table->char('esta_llenado', 1)->nullable();
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
        Schema::dropIfExists('tf_fichas_cotitularidades');
    }
};
