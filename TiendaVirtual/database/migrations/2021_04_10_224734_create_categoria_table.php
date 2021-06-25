<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria', function (Blueprint $table) {
            $table->id('idcategoria');
            $table->string('nombre',25);
            $table->string('descripcion',255);
            $table->boolean('condicion');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('categoria');
    }
}
