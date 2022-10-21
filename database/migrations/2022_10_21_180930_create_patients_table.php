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
        Schema::create('patients', function (Blueprint $table) {
            $table->string('cedula', 10)->primary();
            $table->string('nombre1', 25);
            $table->string('nombre2', 25);
            $table->string('apellido1', 25);
            $table->string('apellido2', 25);
            $table->integer('telefono');
            $table->string('correo', 15);
            $table->string('estadocivil', 15);
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
        Schema::dropIfExists('patients');
    }
};
