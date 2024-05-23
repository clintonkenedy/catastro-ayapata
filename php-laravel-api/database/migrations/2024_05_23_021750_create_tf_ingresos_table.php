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
        Schema::create('tf_ingresos', function (Blueprint $table) {
            $table->string('id_ficha', 19);
            $table->string('id_puerta', 16);
            $table->primary(['id_ficha', 'id_puerta']);
            $table->foreign('id_ficha')->references('id_ficha')->on('tf_fichas')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->foreign('id_puerta')->references('id_puerta')->on('tf_puertas')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_ingresos');
    }
};
