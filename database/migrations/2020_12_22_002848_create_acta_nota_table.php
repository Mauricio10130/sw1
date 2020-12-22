<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActaNotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acta_nota', function (Blueprint $table) {
            $table->id();
            //Robando la llave de la entidad estudiantes
            $table->unsignedBigInteger('estudiante_id')->nullable();

            $table->timestamps();

            //Estableciendo la llave de users como foranea
            $table->foreign('estudiante_id')
                ->references('id')
                ->on('estudiantes')
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
        Schema::dropIfExists('acta_nota');
    }
}
