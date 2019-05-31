<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cofestejado')->nullable();
            $table->string('cod_evento')->unique();
            $table->string('lugar');
            $table->string('direccion');
            $table->date('fecha');
            $table->time('hora');
            $table->string('vestimenta')->nullable();
            $table->boolean('confirmado')->default(0);
            $table->unsignedInteger('tipo_evento_id');
            $table->unsignedInteger('codigo_id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('codigo_id')->references('id')->on('codigos')->onDelete('cascade');
            $table->foreign('tipo_evento_id')->references('id')->on('tipo_eventos')->onDelete('cascade');
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
        Schema::dropIfExists('eventos');
    }
}
