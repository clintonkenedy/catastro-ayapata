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
        Schema::create('tf_autorizaciones_funcionamiento', function (Blueprint $table) {
            $table->string('codi_actividad', 6);
            $table->string('id_ficha', 19);
            $table->timestamps();
            $table->primary(['codi_actividad', 'id_ficha']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_autorizaciones_funcionamiento');
    }
};
