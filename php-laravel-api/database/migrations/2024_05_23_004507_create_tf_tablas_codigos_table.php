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
        Schema::create('tf_tablas_codigos', function (Blueprint $table) {
            $table->char('codigo', 6);
            $table->char('id_tabla', 3);
            $table->string('desc_codigo', 80)->nullable();
            $table->primary(['codigo', 'id_tabla']);
            $table->foreign('id_tabla')
                ->references('id_tabla')
                ->on('tf_tablas')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_tablas_codigos');
    }
};
