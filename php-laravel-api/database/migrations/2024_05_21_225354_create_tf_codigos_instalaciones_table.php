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
        Schema::create('tf_codigos_instalaciones', function (Blueprint $table) {
            $table->string('codi_instalacion', 2)->primary();
            $table->string('desc_instalacion', 50)->nullable();
            $table->string('material', 50)->nullable();
            $table->string('unidad', 30)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_codigos_instalaciones');
    }
};
