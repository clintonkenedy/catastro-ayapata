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
        Schema::create('tf_tablas', function (Blueprint $table) {
            $table->char('id_tabla', 3)->primary();
            $table->string('desc_tabla', 50)->nullable();
            $table->char('ultimo_codigo', 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_tablas');
    }
};
