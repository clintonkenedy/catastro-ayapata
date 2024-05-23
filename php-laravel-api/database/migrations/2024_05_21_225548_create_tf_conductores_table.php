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
        Schema::create('tf_conductores', function (Blueprint $table) {
            $table->string('id_ficha', 19)->primary();
            $table->string('id_persona', 21)->nullable();
            $table->string('fax', 10)->nullable();
            $table->string('telefono', 10)->nullable();
            $table->string('anexo', 5)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('cond_conductor', 18)->nullable();
            $table->string('nume_ruc', 11)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_conductores');
    }
};
