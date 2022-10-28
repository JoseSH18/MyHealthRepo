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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('cedula_paciente', 10);
            $table->foreign('cedula_paciente')->references('cedula')->on('patients')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('pressure_id')->constrained('pressures')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('sugar_id')->constrained('sugar')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('records');
    }
};
