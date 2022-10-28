<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->string('codigo', 10)->primary();
            $table->string('nombre1', 25);
            $table->string('nombre2', 25)->nullable();
            $table->string('apellido1', 25);
            $table->string('apellido2', 25)->nullable();
            $table->integer('telefono');
            $table->string('correo', 40);
            $table->string('consultorio', 25);
            $table->string('detalleMedico', 25);
            $table->string('especialidad', 20);
            $table->string('servicio', 20);
            $table->string('direccion', 20);
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
        Schema::dropIfExists('medicos');
    }
};
