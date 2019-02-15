<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->date('fecha');
            $table->integer('id_paciente')->unsigned();
            $table->integer('id_doctor')->unsigned();
            $table->string('motivo');
            $table->timestamps();
            $table->primary(['fecha','id_paciente','id_doctor']);
            $table->foreign('id_paciente')->references('id')->on('patients');
            $table->foreign('id_doctor')->references('id')->on('doctors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('days');
        Schema::dropIfExists('citas');
    }
}
