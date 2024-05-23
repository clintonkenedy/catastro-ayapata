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
        Schema::create('tf_recap_edificio', function (Blueprint $table) {
            $table->string('id_ficha', 19);
            $table->string('edificio', 2);
            $table->decimal('total_porcentaje', 6, 2);
            $table->decimal('total_atc', 7, 2);
            $table->decimal('total_acc', 7, 2);
            $table->decimal('total_aoic', 7, 2);
            $table->integer('id_recap');
            $table->primary(['id_ficha', 'edificio']);
            $table->foreign('id_ficha')->references('id_ficha')->on('tf_fichas')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_recap_edificio');
    }
};
