<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->id('idpersona');
            $table->string('tipopersona',75);
            $table->string('nombre',75);
            $table->string('tipodocumento',75);
            $table->string('numerodocumento',75);
            $table->string('direccion',25);
            $table->string('telefono',25);
            $table->string('email',25);
            $table->timestamps();


        });
    }


    public function down()
    {
        Schema::dropIfExists('persona');
    }
}
