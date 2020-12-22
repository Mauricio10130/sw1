<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->id();
            $table->integer('salario');
            //Robando la llave de la entidad personas
            $table->unsignedBigInteger('persona_id')->nullable();

            $table->timestamps();

            //Estableciendo la llave de users como foranea
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
        Schema::dropIfExists('profesores');
    }
}
