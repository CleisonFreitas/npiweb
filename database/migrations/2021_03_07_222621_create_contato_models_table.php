<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sistema',40);
            $table->string('status', 20)->nullable()->default('Pendente');
            $table->string('title',150);
            $table->string('login', 80)->nullable();
            $table->string('nome',50);
            $table->string('email',80);
            $table->string('telefone',16)->nullable();
            $table->string('whatsapp',16)->nullable();
            $table->string('descricao');
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
        Schema::dropIfExists('requests');
    }
}
