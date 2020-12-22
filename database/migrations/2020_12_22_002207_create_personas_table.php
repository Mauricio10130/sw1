<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('ci')->unique();
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            //Robando la llave de la entidad tipo_usuario
            $table->unsignedBigInteger('tipo_usuario_id')->nullable();
            //Robando la llave de la entidad users
            $table->unsignedBigInteger('user_id')->nullable();

            $table->timestamps();

            //Estableciendo la llave de tipo_usuario como foranea
            $table->foreign('tipo_usuario_id')
                ->references('id')
                ->on('tipo_usuario')
                ->onDelete('cascade');

            //Estableciendo la llave de users como foranea
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('personas');
    }
}
