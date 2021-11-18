<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('slug');
            $table->string('nombre');
            $table->string('apaterno');
            $table->string('amaterno');
            $table->string('dni');
            $table->string('email');
            $table->string('correo');
            $table->string('telefono');
            $table->string('sexo');
            $table->string('carrera');
            $table->string('semestre');
            $table->string('tipo');
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
