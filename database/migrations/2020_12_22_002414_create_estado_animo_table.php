<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoAnimoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_animo', function (Blueprint $table) {
            $table->id();
            $table->integer('estado')->unique();
            $table->integer('uniformado');
            $table->string('rutaImagen');
            $table->integer('asistencia');
            //Robando la llave de la entidad persona
            $table->unsignedBigInteger('persona_id')->nullable();

            $table->timestamps();

            //Estableciendo la llave de persona como foránea
            $table->foreign('persona_id')
                ->references('id')
                ->on('personas')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estado_animo');
    }
}
