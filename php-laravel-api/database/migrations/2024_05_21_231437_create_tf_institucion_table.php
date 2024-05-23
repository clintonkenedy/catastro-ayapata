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
        Schema::create('tf_institucion', function (Blueprint $table) {
            $table->char('id_institucion', 6)->primary();
            $table->string('desc_institucion', 50)->nullable();
            $table->string('dire_institucion', 100)->nullable();
            $table->string('email', 70)->nullable();
            $table->string('autoridad', 100)->nullable();
            $table->string('cargo', 50)->nullable();
            $table->date('fecha_registro')->nullable();
            $table->char('nume_ip', 15)->nullable();
            $table->string('nomb_host', 70)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_institucion');
    }
};
