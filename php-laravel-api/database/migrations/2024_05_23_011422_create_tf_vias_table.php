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
        Schema::create('tf_vias', function (Blueprint $table) {
            $table->char('id_via', 12)->primary();
            $table->string('nomb_via', 100)->nullable();
            $table->char('tipo_via', 5)->nullable();
            $table->char('codi_via', 6)->nullable();
            $table->char('id_ubi_geo', 6)->nullable();
            $table->date('fecha_via')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_vias');
    }
};
