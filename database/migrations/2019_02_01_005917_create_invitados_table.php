<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvitadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('appat');
            $table->string('apmat')->nullable();
            $table->biginteger('telefono')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('codigo')->unique()->nullable();
            $table->enum('titulo',['Sr.','Sra.','Srita.','Joven']);
            $table->unsignedInteger('evento_id');
            $table->unsignedInteger('user_id');

            $table->foreign('evento_id')->references('id')->on('eventos')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('invitados');
    }
}
