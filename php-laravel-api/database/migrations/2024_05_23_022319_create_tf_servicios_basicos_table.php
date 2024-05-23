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
        Schema::create('tf_servicios_basicos', function (Blueprint $table) {
            $table->string('id_ficha', 19);
            $table->tinyInteger('luz')->nullable();
            $table->tinyInteger('agua')->nullable();
            $table->tinyInteger('telefono')->nullable();
            $table->tinyInteger('desague')->nullable();
            $table->string('nume_sum_luz', 10)->nullable();
            $table->string('nume_telefono', 10)->nullable();
            $table->string('nume_contrato_agua', 10)->nullable();
            $table->primary('id_ficha');
            $table->foreign('id_ficha')->references('id_ficha')->on('tf_fichas')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_servicios_basicos');
    }
};
