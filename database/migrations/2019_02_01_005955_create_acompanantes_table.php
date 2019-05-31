<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcompanantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acompanantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('appat');
            $table->string('apmat')->nullable();
            $table->unsignedInteger('invitado_id');
            
            $table->foreign('invitado_id')->references('id')->on('invitados')->onDelete('cascade');
            $table->boolean('nino');
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
        Schema::dropIfExists('acompanantes');
    }
}
