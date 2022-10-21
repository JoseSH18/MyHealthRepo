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
        Schema::create('illness_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enfermedad_id')->constrained('illnesses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('expediente_id')->constrained('records')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('illness_records');
    }
};
