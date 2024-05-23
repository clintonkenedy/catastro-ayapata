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
        Schema::create('tf_ubigeo', function (Blueprint $table) {
            $table->char('id_ubi_geo', 6)->primary();
            $table->string('nomb_ubi_geo', 100)->nullable();
            $table->char('cuc_desde', 8)->nullable();
            $table->char('cuc_hasta', 8)->nullable();
            $table->char('ultimo_cuc', 8)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_ubigeo');
    }
};
