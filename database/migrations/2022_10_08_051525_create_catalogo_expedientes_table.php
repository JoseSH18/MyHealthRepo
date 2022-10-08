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
        Schema::create('catalogo_expedientes', function (Blueprint $table) {
            
            $table->id();
            $table->foreignId('expediente_id')->constrained('expedientes');
            $table->string('cedula_paciente', 10);
            $table->foreign('cedula_paciente')->references('cedula')->on('pacientes');
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
        Schema::dropIfExists('catalogo_expedientes');
    }
};
