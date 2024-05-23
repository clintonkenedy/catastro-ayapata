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
        Schema::create('tf_usos', function (Blueprint $table) {
            $table->char('codi_uso', 6)->primary();
            $table->string('desc_uso', 250)->nullable();
        });

        Schema::table('tf_usos', function (Blueprint $table) {
            $table->index('codi_uso');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_usos');
    }
};
