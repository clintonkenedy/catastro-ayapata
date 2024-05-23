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
        Schema::create('tf_litigantes', function (Blueprint $table) {
            $table->char('id_ficha', 19);
            $table->char('id_persona', 21);
            $table->char('codi_contribuye', 18)->nullable();
            $table->primary(['id_ficha', 'id_persona']);
            $table->foreign('id_ficha')
                ->references('id_ficha')
                ->on('tf_fichas')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('id_persona')
                ->references('id_persona')
                ->on('tf_personas')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_litigantes');
    }
};
