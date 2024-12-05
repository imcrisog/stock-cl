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
        Schema::create('stocks', function (Blueprint $table) {
            $table->string('CODIGO', 12)->nullable();
            $table->string('MARCA', 12)->nullable();
            $table->string('MODELO', 19)->nullable();
            $table->decimal('ANCHO', 3, 1)->nullable();
            $table->string('PERFIL', 10)->nullable();
            $table->string('E', 1)->nullable();
            $table->string('ARO', 10)->nullable();
            $table->string('TIPO', 6)->nullable();
            $table->string('TELAS', 4)->nullable();
            $table->string('I_C', 3)->nullable();
            $table->string('I_V', 1)->nullable();
            $table->string('FAB', 5)->nullable();
            $table->integer('C_C_IVA')->nullable();
            $table->string('C_NETO', 16)->nullable();
            $table->string('PCP', 3)->nullable();
            $table->string('PPP', 3)->nullable();
            $table->string('PPS', 3)->nullable();
            $table->string('PL', 3)->nullable();
            $table->integer('FLETE')->nullable();
            $table->integer('C_P')->nullable();
            $table->integer('P_DIST')->nullable();
            $table->integer('MBV')->nullable();
            $table->integer('PRECIO_LISTA')->nullable();
            $table->string('PROVEEDOR', 9)->nullable();
            $table->string('STOCK_R', 4)->nullable();
            $table->string('STOCK_O', 5)->nullable();
            $table->string('V_TR', 4)->nullable();
            $table->string('V_TO', 5)->nullable();
            $table->string('TOTALES', 10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
