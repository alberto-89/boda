<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfirmacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirmacions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('invitado_id');
            $table->unsignedInteger('acompanante_id')->nullable();;
            $table->unsignedInteger('asistencia_id');
            $table->unsignedInteger('evento_id');
            $table->foreign('evento_id')->references('id')->on('eventos')->onDelete('cascade');
            $table->foreign('asistencia_id')->references('id')->on('asistencias')->onDelete('cascade');
            $table->foreign('invitado_id')->references('id')->on('invitados')->onDelete('cascade');
            $table->foreign('acompanante_id')->references('id')->on('acompanantes')->onDelete('cascade');
            $table->boolean('asistio')->nullable();
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
        Schema::dropIfExists('confirmacions');
    }
}
