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
        Schema::create('tf_edificaciones', function (Blueprint $table) {
            $table->char('id_edificacion', 16)->primary();
            $table->char('id_lote', 14)->nullable();
            $table->char('codi_edificacion', 2)->nullable();
            $table->char('tipo_edificacion', 2)->nullable();
            $table->string('nomb_edificacion', 50)->nullable();
            $table->char('clasificacion', 4)->nullable();
            $table->foreign('id_lote')
                ->references('id_lote')
                ->on('tf_lotes')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_edificaciones');
    }
};
