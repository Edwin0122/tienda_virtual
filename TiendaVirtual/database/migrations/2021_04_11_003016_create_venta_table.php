<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->id('idventa');
            $table->string('tipo_comprobante',75);
            $table->string('serie_comprobante',75);
            $table->string('num_comprobante',75);
            $table->dateTime('fecha_hora');
            $table->decimal('impuesto',5);
            $table->decimal('total_venta',15);
            $table->string('estado',20);
            $table->timestamps();

            //foring
            $table->bigInteger('fkidusuario')->unsigned();
            //union
            $table->foreign('fkidusuario')->references('idusers')->on('users');

            //foring
            $table->bigInteger('fkidpersona')->unsigned();
            //union
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
        Schema::dropIfExists('venta');
    }
}
