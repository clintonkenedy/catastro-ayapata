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
        Schema::create('tf_notarias', function (Blueprint $table) {
            $table->char('id_notaria', 11)->primary();
            $table->integer('codi_notaria');
            $table->string('nomb_notaria', 50);
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
        Schema::dropIfExists('tf_notarias');
    }
};
