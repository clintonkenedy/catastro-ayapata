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
        Schema::create('tf_puertas', function (Blueprint $table) {
            $table->string('id_puerta', 16)->primary();
            $table->string('id_lote', 14)->nullable();
            $table->string('codi_puerta', 2);
            $table->char('tipo_puerta', 1);
            $table->string('nume_muni', 20)->nullable();
            $table->string('cond_nume', 2)->nullable();
            $table->string('id_via', 12)->nullable();
            $table->string('nume_certificacion', 10)->nullable();
            
            $table->foreign('id_lote')->references('id_lote')->on('tf_lotes')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->foreign('id_via')->references('id_via')->on('tf_vias')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_puertas');
    }
};
