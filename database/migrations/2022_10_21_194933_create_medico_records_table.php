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
        Schema::create('medico_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('expediente_id')->constrained('records')->onUpdate('cascade')->onDelete('cascade');
            $table->string('cedula_paciente', 10);
            $table->foreign('cedula_paciente')->references('cedula')->on('patients')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('medico_records');
    }
};
