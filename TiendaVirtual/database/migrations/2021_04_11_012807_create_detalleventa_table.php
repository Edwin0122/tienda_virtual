<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleventaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleventa', function (Blueprint $table) {
            $table->id('iddetalleventa');
            $table->integer('cantidad');
            $table->decimal('precioventa');
            $table->decimal('descuento');
            $table->timestamps();


            //foring
            $table->bigInteger('fkidarticulo')->unsigned();
            //union
            $table->foreign('fkidarticulo')->references('idarticulo')->on('articulo');


            //foring
            $table->bigInteger('fkidventa')->unsigned();
            //union
            $table->foreign('fkidventa')->references('idventa')->on('venta');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalleventa');
    }
}
