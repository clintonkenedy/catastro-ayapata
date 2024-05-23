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
        Schema::create('tf_recap_bbcc', function (Blueprint $table) {
            $table->string('id_ficha', 19);
            $table->string('edifica', 2);
            $table->string('entrada', 2)->nullable();
            $table->string('piso', 2)->nullable();
            $table->string('unidad', 3)->nullable();
            $table->decimal('porcentaje', 5, 2);
            $table->decimal('atc', 7, 2);
            $table->decimal('acc', 7, 2);
            $table->decimal('aoic', 7, 2);
            $table->integer('nume_registro')->nullable();
            $table->primary(['id_ficha', 'edifica']);
            $table->foreign('id_ficha')->references('id_ficha')->on('tf_fichas')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_recap_bbcc');
    }
};
