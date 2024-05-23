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
        Schema::create('tf_historia_via', function (Blueprint $table) {
            $table->id('id_historia_via');
            $table->string('nomb_via_ant', 100);
            $table->date('fecha_via');
            $table->char('id_via', 12);
            $table->tinyInteger('activo')->default(0);
            $table->foreign('id_via')
                ->references('id_via')
                ->on('tf_vias')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_historia_via');
    }
};
