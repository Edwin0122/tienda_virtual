<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo', function (Blueprint $table) {
            $table->id('idarticulo');
            $table->string('codigo',50);
            $table->string('nombre',100);
            $table->integer('stock');
            $table->text('descripcion');
            $table->string('imagen',50);
            $table->string('estado',20);
            $table->timestamps();


            $table->bigInteger('fkidcategoria')->unsigned();
            $table->foreign('fkidcategoria')->references('idcategoria')->on('categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulo');
    }
}
