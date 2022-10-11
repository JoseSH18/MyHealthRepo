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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->string('cedula_paciente', 10);
            $table->foreign('cedula_paciente')->references('cedula')->on('pacientes')->onUpdate('cascade')->onDelete('cascade');
            $table->string('codigo_medico', 10);
            $table->foreign('codigo_medico')->references('codigo')->on('medicos')->onUpdate('cascade')->onDelete('cascade');
            $table->string('fechaHora', 25);
            $table->string('estado', 10);
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
        Schema::dropIfExists('citas');
    }
};
