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
        Schema::create('tf_registro_legal', function (Blueprint $table) {
            $table->string('id_ficha', 19);
            $table->string('id_notaria', 11);
            $table->string('kardex', 20)->nullable();
            $table->date('fecha_escritura')->nullable();
            $table->primary(['id_ficha', 'id_notaria']);
            $table->foreign('id_ficha')->references('id_ficha')->on('tf_fichas')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->foreign('id_notaria')->references('id_notaria')->on('tf_notarias')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_registro_legal');
    }
};
