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
        Schema::create('tf_exoneraciones_predio', function (Blueprint $table) {
            $table->char('id_ficha', 19)->primary();
            $table->char('condicion', 2)->nullable();
            $table->char('nume_resolucion', 20)->nullable();
            $table->decimal('porcentaje', 7, 2);
            $table->date('fecha_inicio');
            $table->date('fecha_vencimiento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_exoneraciones_predio');
    }
};
