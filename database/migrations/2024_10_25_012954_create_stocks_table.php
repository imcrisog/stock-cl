<?php

use App\SiteStorage;
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
            $table->id();
            $table->string('CODIGO'); 
            $table->string('MARCA');
            $table->string('MODELO');
            $table->decimal('ANCHO');
            $table->string('PERFIL');
            $table->string('E');
            $table->string('ARO');
            $table->string('TIPO');
            $table->string('TELAS');
            $table->string('I.C');
            $table->string('I.V.');
            $table->string('FAB.');
            $table->integer('C. C/IVA');
            $table->string('C. NETO');
            $table->string('%C.P');
            $table->string('%P.P');
            $table->string('%P.S');
            $table->string('%P+S');
            $table->string('PL');
            $table->integer('FLETE');
            $table->integer('C.P.');
            $table->integer('P.DIST');
            $table->integer('M+B+V');
            $table->integer('PRECIO LISTA');
            $table->string('PROVEEDOR');
            $table->string('STOCK R.');
            $table->string('STOCK O.');
            $table->string('V.T.R');
            $table->string('V.T.O');
            $table->string('TOTALES');
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
