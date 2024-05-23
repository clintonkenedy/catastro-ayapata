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
        Schema::create('tf_hab_urbana', function (Blueprint $table) {
            $table->char('id_hab_urba', 10)->primary();
            $table->string('grup_urba', 100);
            $table->char('tipo_hab_urba', 6)->nullable();
            $table->string('nomb_hab_urba', 100);
            $table->char('codi_hab_urba', 4)->nullable();
            $table->char('id_ubi_geo', 6)->nullable();
            
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
        Schema::dropIfExists('tf_hab_urbana');
    }
};
