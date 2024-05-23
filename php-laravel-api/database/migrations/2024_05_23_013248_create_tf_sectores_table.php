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
        Schema::create('tf_sectores', function (Blueprint $table) {
            $table->char('id_sector', 8)->primary();
            $table->char('id_ubi_geo', 6)->nullable();
            $table->char('codi_sector', 2)->nullable();
            $table->string('nomb_sector', 20)->nullable();
            $table->foreign('id_ubi_geo')
                ->references('id_ubi_geo')
                ->on('tf_ubigeo')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_sectores');
    }
};
