<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngresoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingreso', function (Blueprint $table) {
            $table->id('idingreso');
            $table->string('tipocomprobante',25);
            $table->string('seriecomprobante',25);
            $table->string('numerocomprobante',25);
            $table->dateTime('fechahora');
            $table->decimal('impuesto');
            $table->decimal('estado',25);
            $table->timestamps();

            $table->bigInteger('fkidpersona')->unsigned();
            $table->foreign('fkidpersona')->references('idpersona')->on('persona');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingreso');
    }
}
