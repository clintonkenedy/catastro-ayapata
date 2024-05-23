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
        Schema::create('tf_uni_cat', function (Blueprint $table) {
            $table->char('id_uni_cat', 23)->primary();
            $table->char('id_lote', 14)->nullable();
            $table->char('id_edificacion', 16)->nullable();
            $table->char('codi_entrada', 2)->nullable();
            $table->char('codi_piso', 2)->nullable();
            $table->char('codi_unidad', 3)->nullable();
            $table->char('tipo_interior', 2)->nullable();
            $table->char('cuc', 12)->nullable();
            $table->char('cuc_antecedente', 12)->nullable();
            $table->char('codi_hoja_catastral', 10)->nullable();
            $table->char('codi_pred_rentas', 15)->nullable();
            $table->string('nume_interior', 15)->nullable();
            $table->string('unid_acum_rentas', 15)->nullable();
            $table->string('codi_cont_rentas', 15)->nullable();
            $table->foreign('id_edificacion')
                ->references('id_edificacion')
                ->on('tf_edificaciones')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tf_uni_cat');
    }
};
