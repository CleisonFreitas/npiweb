<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratorio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao',80);
            $table->string('categoria',20);
            $table->string('tipo',10);
            $table->enum('nivel',['N','E','Q']);
            $table->integer('form_id')->unsigned();
            $table->string('iframe')->nullable();
            $table->string('etiqueta',30);
            $table->string('ordem',30);
            $table->foreign('form_id')->references('id')->on('formacoes');
            $table->string('operador',50);
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
        Schema::dropIfExists('laboratorio');
    }
}
