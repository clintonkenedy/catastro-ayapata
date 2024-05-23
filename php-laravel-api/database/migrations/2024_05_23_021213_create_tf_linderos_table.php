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
        Schema::create('tf_linderos', function (Blueprint $table) {
            $table->char('id_ficha', 19)->primary();
            $table->string('fren_campo', 20)->nullable();
            $table->string('fren_titulo', 20)->nullable();
            $table->string('fren_colinda_campo', 20)->nullable();
            $table->string('fren_colinda_titulo', 20)->nullable();
            $table->string('dere_campo', 20)->nullable();
            $table->string('dere_titulo', 20)->nullable();
            $table->string('dere_colinda_campo', 20)->nullable();
            $table->string('dere_colinda_titulo', 20)->nullable();
            $table->string('izqu_campo', 20)->nullable();
            $table->string('izqu_titulo', 20)->nullable();
            $table->string('izqu_colinda_campo', 20)->nullable();
            $table->string('izqu_colinda_titulo', 20)->nullable();
            $table->string('fond_titulo', 20)->nullable();
            $table->string('fond_campo', 20)->nullable();
            $table->string('fond_colinda_campo', 20)->nullable();
            $table->string('fond_colinda_titulo', 20)->nullable();

            $table->foreign('id_ficha')
                ->references('id_ficha')
                ->on('tf_fichas')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_linderos');
    }
};
