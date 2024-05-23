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
        Schema::create('tf_lotes', function (Blueprint $table) {
            $table->char('id_lote', 14)->primary();
            $table->char('id_mzna', 11)->nullable();
            $table->char('codi_lote', 3)->nullable();
            $table->char('id_hab_urba', 10)->nullable();
            $table->char('mzna_dist', 15)->nullable();
            $table->char('lote_dist', 5)->nullable();
            $table->char('sub_lote_dist', 6)->nullable();
            $table->string('estructuracion', 30)->nullable();
            $table->string('zonificacion', 30)->nullable();
            $table->char('cuc', 8)->nullable();
            $table->char('zona_dist', 15)->nullable();
            $table->foreign('id_mzna')
                ->references('id_mzna')
                ->on('tf_manzanas')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_lotes');
    }
};
