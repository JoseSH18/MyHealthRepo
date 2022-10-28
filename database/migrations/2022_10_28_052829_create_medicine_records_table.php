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
        Schema::create('medicine_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medicamento_id')->constrained('medicines')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('medicine_records');
    }
};
