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
        Schema::create('tf_construcciones', function (Blueprint $table) {
            $table->string('id_construccion', 25)->primary();
            $table->string('id_ficha', 19);
            $table->integer('codi_construccion');
            $table->string('nume_piso', 2)->nullable();
            $table->date('fecha')->nullable();
            $table->string('mep', 2)->nullable();
            $table->string('ecs', 2)->nullable();
            $table->string('ecc', 2)->nullable();
            $table->string('estr_muro_col', 1)->nullable();
            $table->string('estr_techo', 1)->nullable();
            $table->string('acab_piso', 1)->nullable();
            $table->string('acab_puerta_ven', 1)->nullable();
            $table->string('acab_revest', 1)->nullable();
            $table->string('acab_bano', 1)->nullable();
            $table->string('inst_elect_sanita', 1)->nullable();
            $table->decimal('area_declarada', 8, 2)->nullable();
            $table->decimal('area_verificada', 8, 2)->nullable();
            $table->string('uca', 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_construcciones');
    }
};
