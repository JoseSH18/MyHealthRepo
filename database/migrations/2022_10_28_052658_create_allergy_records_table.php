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
        Schema::create('allergy_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alergia_id')->constrained('allergies')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('allergy_records');
    }
};
