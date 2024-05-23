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
        Schema::create('tf_manzanas', function (Blueprint $table) {
            $table->char('id_mzna', 11)->primary();
            $table->char('id_sector', 8)->nullable();
            $table->char('codi_mzna', 3)->nullable();
            $table->char('nume_mzna', 15)->nullable();
            $table->foreign('id_sector')
                ->references('id_sector')
                ->on('tf_sectores')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_manzanas');
    }
};
