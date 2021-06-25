<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleingresoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleingreso', function (Blueprint $table) {
            $table->id('iddetalleingreso');
            $table->integer('cantidad');
            $table->decimal('preciocompra');
            $table->decimal('precioventa');
            $table->timestamps();




            $table->bigInteger('fkidarticulo')->unsigned();
            $table->foreign('fkidarticulo')->references('idarticulo')->on('articulo');

            $table->bigInteger('fkidingreso')->unsigned();
            $table->foreign('fkidingreso')->references('idingreso')->on('ingreso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalleingreso');
    }
}
