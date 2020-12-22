<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string('materia');
            $table->string('turno')->unique();
            //Robando la llave de la entidad niveles
            $table->unsignedBigInteger('nivel_id')->nullable();

            $table->timestamps();

            //Estableciendo la llave de niveles como foranea
            $table->foreign('nivel_id')
                ->references('id')
                ->on('niveles')
                ->onDelete('cascade');
        });

        Schema::create('acta_materia', function (Blueprint $table) {
            $table->primary('materia_id', 'acta_nota_id');

            //Robando la llave de la entidad materias
            $table->unsignedBigInteger('materia_id');
            //Robando la llave de la entidad acta_nota
            $table->unsignedBigInteger('acta_nota_id');

            $table->integer('puntaje');
            $table->timestamps();

                //Estableciendo la llave de materias como foránea
            $table->foreign('materia_id')
                ->references('id')
                ->on('materias')
                ->onDelete('cascade');

                //Estableciendo la llave de acta_nota como foránea
            $table->foreign('acta_nota_id')
                ->references('id')
                ->on('acta_nota')
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
        Schema::dropIfExists('materias');
    }
}
